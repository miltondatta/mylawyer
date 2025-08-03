<?php

namespace App\Http\Controllers\API\Customers;

use App\Events\ChatMessage;
use App\Models\AppointmentType;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Http\Resources\API\MessagesResource;
use App\Models\BookAppointment;
use App\Models\Message;
use App\Http\Requests\API\ChatMessage\SendMessageRequest;
use Illuminate\Support\Facades\Auth;

class CustomerChatMessagesController extends Controller
{
    public function __construct()
    {
      $this->middleware(['api','auth:api','verified','api_setting']);
      $this->middleware('customer.api');
    }
    public function getChatMessages(Request $request , BookAppointment $appointment)
    {
       $user = Auth::user();
       $customer = $user->customer;
      if($appointment->customer_id != $customer->id){
        $response = generateResponse(null, false, "Not Found", null, 'collection');
        return response()->json($response);
      }
        $messages = Message::where('appointment_id', $appointment->id)->get();
        $messages = MessagesResource::collection($messages);
        $response = generateResponse($messages, true, "Chat Messages fetched Successfully", null, 'collection');
        return response()->json($response);
    }
    public function sendChatMessage(SendMessageRequest $request)
    {
         $chat_appointment_type = AppointmentType::where('type' , 'chat')->first();
         $appointment = BookAppointment::where('id', $request->appointment_id)->where('appointment_type_id' , $chat_appointment_type->id)->first();
         if(!empty($appointment)){
          $user = Auth::user();
          $customer = $user->customer;
          if($appointment->customer_id != $customer->id){
            $response = generateResponse(null, false, "Not Found", null, 'collection');
            return response()->json($response);
          }
         $data = $request->all();
         $data['sender_id'] = $customer->id;
         $data['sender_type'] = 'App\Models\Customer';
         $data['reciever_id'] = $appointment->lawyer_id;
         $data['reciever_type'] = "App\Models\Lawyer";
         if ($request->hasFile('attachment_file')) {
             $data['attachment_url'] = uploadFile($request, 'attachment_file', 'chat_attachments');
             $data['is_attachment'] = 1;
         }
         $message = Message::create($data);
         $message = new MessagesResource($message);
         event(new ChatMessage($message));
         $response = generateResponse($message, true, "Message send successfully", null, 'collection');
         }else{
          $response = generateResponse(null, false, "404 Not Found", null, 'collection');
         }
        return response()->json($response);
    }
}
