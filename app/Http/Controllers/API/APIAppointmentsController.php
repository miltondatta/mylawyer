<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentMethods\StripeController;
use App\Http\Requests\API\Customers\BookAppointmentRequest;
use App\Http\Resources\API\BookAppointmentsResource;
use App\Models\AppointmentSchedule;
use App\Models\AppointmentScheduleSlot;
use App\Models\AppointmentStatus;
use App\Models\AppointmentType;
use App\Models\BookAppointment;
use Illuminate\Support\Facades\DB;

class APIAppointmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('api');
        $this->middleware('verified');
        $this->middleware('api_setting');
        $this->middleware('customer.api');
    }
    public function getter($req = null, $export = null)
    {

        $customer = auth()->user()->customer;
        if ($req != null) {
            $customer_appointments =  $customer->appointments()->withAll();
            if ($req->trash && $req->trash == 'with') {
                $customer_appointments =  $customer_appointments->withTrashed();
            }
            if ($req->trash && $req->trash == 'only') {
                $customer_appointments =  $customer_appointments->onlyTrashed();
            }
            if ($req->column && $req->column != null && $req->search != null) {
                $customer_appointments = $customer_appointments->whereLike($req->column, $req->search);
            } else if ($req->search && $req->search != null) {

                $customer_appointments = $customer_appointments->whereLike(['name', 'description'], $req->search);
            }
            if ($req->status_code) {
                $customer_appointments = $customer_appointments->where('appointment_status_code', $req->status_code);
            }

            if ($req->sort && $req->sort['field'] != null && $req->sort['type'] != null) {
                $customer_appointments = $customer_appointments->OrderBy($req->sort['field'], $req->sort['type']);
            } else {
                $customer_appointments = $customer_appointments->OrderBy('id', 'desc');
            }
            if ($export != null) { // for export do not paginate
                $customer_appointments = $customer_appointments->get();
                return $customer_appointments;
            }
            $totalCustomerAppointments = $customer_appointments->count();
            $customer_appointments = $customer_appointments->paginate($req->perPage);
            $customer_appointments = BookAppointmentsResource::collection($customer_appointments)->response()->getData(true);

            return $customer_appointments;
        }
        $customer_appointments = BookAppointmentsResource::collection($customer->appointments()->withAll()->orderBy('id', 'desc')->paginate(10))->response()->getData(true);
        return $customer_appointments;
    }

    public function bookAppointment(BookAppointmentRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $user = Auth()->user();
            $customer = $user->customer->id;
            $appointment_type = AppointmentType::where('id', $request->appointment_type_id)->first();
            if ($appointment_type->is_schedule_required) {
                $schedule_slot = AppointmentScheduleSlot::with('appointment_schedule')->where('schedule_id', $request->appointment_schedule_id)->first();
                $data['start_time'] = $schedule_slot->start_time;
                $data['end_time'] = $schedule_slot->end_time;
                $data['fee'] = $schedule_slot->appointment_schedule->fee;
            } else {
                if (isset($request->lawyer_id)) {
                    $appointment_schedule = AppointmentSchedule::where('lawyer_id', $request->lawyer_id)->where('appointment_type_id', $request->appointment_type_id)->first();
                } else {
                    $appointment_schedule = AppointmentSchedule::where('law_firm_id', $request->law_firm_id)->where('appointment_type_id', $request->appointment_type_id)->first();
                }
                $data['start_time'] = null;
                $data['end_time'] = null;
                $data['fee'] = $appointment_schedule->fee;
            }

            $data['customer_id'] = $customer;
            $data['appointment_status_code'] = AppointmentStatus::$Pending;
            if ($request->hasFile('attachment')) {
                $data['attachment_url'] = uploadFile($request, 'attachment', 'booked_appointments');
            }
            $request->merge(['amount' => $data['fee']]);

            $fund_request = PaymentController::addFundRequest($request);
            // dd($fund_request);
            $data['fund_id'] = $fund_request['fund']['id'] ?? null;
            if ($fund_request['fund'] ?? false) {
                $data['is_paid'] = 0;
                $appointment = BookAppointment::create($data);
                // $request->merge(['fee' => $data['fee']]);
                $appointment->fund_transaction = $fund_request['fund']->transaction ?? null;
                // $appointment->fund = $fund_request['fund'];
                $response = generateResponse($appointment, true, 'Appointment Booked Successfully', null, 'collection');
                DB::commit();
                return response()->json($response, 200);
            } else {
                $response = generateResponse($fund_request, false, 'Error', null, 'collection');
                return response()->json($response, 200);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            $response = generateResponse(null, false, $e->getMessage(), null, 'collection');
            return response()->json($response, 200);
        }
    }
    public function getFilteredAppointmentlogs(Request $request)
    {
        $appointments = $this->getter($request);
        $response = generateResponse($appointments, count($appointments['data']) > 0 ? true : false, 'Filter Appointment Logs Successfully', null, 'collection');
        return response()->json($response, 200);
    }
    public function showAppointmentLogDetail(BookAppointment $book_appointment)
    {
        $user = Auth()->user();
        $appointment = BookAppointment::withAll()->find($book_appointment->id);
        return ($book_appointment->customer_id == $user->customer->id)
            ? response()->json(generateResponse(new BookAppointmentsResource($appointment), true, 'Appointment Fetched Successfully', null, 'collection'), 200)
            : response()->json(generateResponse(null, false, 'Appointment Not Found', null, 'collection'), 404);
    }
}
