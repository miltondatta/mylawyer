<?php

namespace App\Http\Controllers;

use App\Events\ChatMessage;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Http\Resources\Web\MessagesResource;
use App\Models\BookAppointment;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatMessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getChatMessages(Request $request)
    {

        $appointment = BookAppointment::with('messages')->where('id', $request->appointment_id)->first();
        $messages = $appointment->messages ? MessagesResource::collection($appointment->messages) : null;
        $response = generateResponse($messages, true, "Chat Messages fetched Successfully", null, 'collection');
        return response()->json($response);
    }
    public function sendChatMessage(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $user = Auth::user();
        $appointment = BookAppointment::where('id', $request->appointment_id)->first();
        $logged_in_as = $request->session()->get('logged_in_as');
        if ($logged_in_as == 'lawyer') {
            $lawyer = $user->lawyer;
            $sender_id = $lawyer->id;
            $sender_type = 'App\Models\Lawyer';
        }
        if ($logged_in_as == 'law_firm') {
            $law_firm = $user->law_firm;
            $sender_id = $law_firm->id;
            $sender_type = 'App\Models\LawFirm';
        }

        if ($logged_in_as == 'customer') {
            $customer = $user->customer;
            $sender_id = $customer->id;
            $sender_type = 'App\Models\Customer';
        }

        $data['sender_id'] = $sender_id;
        $data['sender_type'] = $sender_type;
    //    Not using anywhere
        $data['reciever_id'] = $appointment->customer_id;
        $data['reciever_type'] = "App\Models\Customer";
        $data['reciever_id'] = $appointment->lawyer_id;
        $data['reciever_type'] = "App\Models\Lawyer";
    //    Not using anywhere
        if ($request->hasFile('attachment_file')) {
            $data['attachment_url'] = uploadFile($request, 'attachment_file', 'chat_attachments');
            $data['is_attachment'] = 1;
        }
        $message = Message::create($data);
        $message = new MessagesResource($message);
        event(new ChatMessage($message));
        $response = generateResponse($message, true, "Message send successfully", null, 'collection');
        return response()->json($response);
    }
}
