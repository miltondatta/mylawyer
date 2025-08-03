<?php

namespace App\Http\Controllers\Customers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentMethods\StripeController;
use App\Http\Controllers\WalletController;
use App\Http\Requests\Customers\BookAppointmentRequest;
use App\Http\Resources\Web\BookAppointmentsResource;
use App\Models\AppointmentSchedule;
use App\Models\AppointmentScheduleSlot;
use App\Models\AppointmentStatus;
use App\Models\AppointmentType;
use App\Models\BookAppointment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\Passport;

class BookAppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('customer');
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
        $data = $request->all();
        $user = Auth()->user();
        $customer = $user->customer->id;
        $appointment_type = AppointmentType::where('id', $request->appointment_type_id)->first();
        if ($appointment_type->is_schedule_required) {
            $schedule_slot = AppointmentScheduleSlot::with('appointment_schedule')->where('id', $request->selected_schedule_id)->first();
            $data['start_time'] = $schedule_slot->start_time;
            $data['end_time'] = $schedule_slot->end_time;
            $data['fee'] = $schedule_slot->appointment_schedule->fee;
        } else {
            if (isset($request->lawyer_id)) {
                $appointment_schedule = AppointmentSchedule::where('lawyer_id', $request->lawyer_id)->where('appointment_type_id', $request->appointment_type_id)->first();
            }
            if (isset($request->law_firm_id)) {
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
        $request->merge([
            'amount' => $data['fee']
        ]);
        if ($request->gateway == 'wallet') {
            $wallet = new WalletController();
            $wallet_response = $wallet->payThroughUserWallet($request->amount);
            $wallet_response = $wallet_response->getData();
            if ($wallet_response->status) {
                $data['is_paid'] = 1;
                $appointment = BookAppointment::create($data);
                request()->session()->flash('alert', [
                    'type' => 'info',
                    'message' => 'Appointment Booked Successfully',
                ]);
                return redirect()->back()->withResponseData([
                    'appointment' => $appointment,
                ]);
            } else {
                request()->session()->flash('alert', [
                    'type' => 'error',
                    'message' => $wallet_response->msg
                ]);
                return redirect()->back();
            }
        } else {
            $fund_request = PaymentController::addFundRequest($request);
            $data['fund_id'] = $fund_request['fund']['id'] ?? null;
            if ($fund_request['fund'] ?? false) {
                $data['is_paid'] = 0;
                $appointment = BookAppointment::create($data);
                $request->merge(['fee' => $data['fee']]);
                request()->session()->flash('alert', [
                    'type' => 'info',
                    'message' => 'Appointment Booked Successfully',
                ]);
                return redirect()->back()->withResponseData([
                    'appointment' => $appointment,
                    'fund' => $fund_request['fund']
                ]);
            } else {
                request()->session()->flash('alert', [
                    'type' => 'error',
                    'message' => $fund_request,
                ]);
                return redirect()->back()->withErrors($fund_request);
            }
        }
    }
    public function getFilteredAppointmentlogs(Request $request)
    {
        $appointments = $this->getter($request);
        $response = generateResponse($appointments, count($appointments['data']) > 0 ? true : false, 'Filter Appointment Logs Successfully', null, 'collection');
        return response()->json($response, 200);
    }
    public function showAppointmentLogDetailPage($id)
    {
        $user = Auth()->user();
        $customer_id = $user->customer->id;
        $appointment = BookAppointment::withAll()->where('id', $id)->where('customer_id', $customer_id)->first();
        $appointment = new BookAppointmentsResource($appointment);
        $data = [
            'appointment' => $appointment,
        ];
        return Inertia::render('AppointmentLogDetail', $data);
    }
}
