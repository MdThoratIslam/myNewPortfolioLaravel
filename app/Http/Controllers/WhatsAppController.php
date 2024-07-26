<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class WhatsAppController extends Controller
{
//    public function store(Request $request)
//
//    {
//        $twilioSid = env('TWILIO_SID');
//        $twilioToken = env('TWILIO_AUTH_TOKEN');
//
//        $twilioWhatsAppNumber = env('TWILIO_WHATSAPP_NUMBER');
//        $recipientNumber = $request->phone;
//        $message = $request->message;
//        try {
//
//            $twilio = new Client($twilioSid, $twilioToken);
//            $twilio->messages->create(
//                $recipientNumber,
//
//                [
//                    "from" => "whatsapp:+". $twilioWhatsAppNumber,
//                    "body" => $message,
//                ]
//
//            );
//
//
//
//            return back()->with(['success' => 'WhatsApp message sent successfully!']);
//
//        } catch (Exception $e) {
//            return back()->with(['error' => $e->getMessage()]);
//
//        }
//
//    }
    public function store(Request $request)
    {
        $twilioSid = env('TWILIO_SID');
        $twilioToken = env('TWILIO_TOKEN');
        $twilioWhatsAppNumber = env('TWILIO_FROM');
        $recipientNumber = 'whatsapp:+88' . $request->phone;
        $message = $request->message;

        // Check if the recipient number and the Twilio number are different
        if ($recipientNumber === "whatsapp:" . $twilioWhatsAppNumber) {
            return back()->with(['error' => 'Recipient number cannot be the same as the Twilio WhatsApp number.']);
        }

        try {
            $twilio = new Client($twilioSid, $twilioToken);
            $twilio->messages->create(
                $recipientNumber,
                [
                    "from" => "whatsapp:" . $twilioWhatsAppNumber,
                    "body" => "Phone Nummber:".$recipientNumber."<br>".$message,
                ]
            );

            return back()->with(['success' => 'WhatsApp message sent successfully!']);
        } catch (Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
