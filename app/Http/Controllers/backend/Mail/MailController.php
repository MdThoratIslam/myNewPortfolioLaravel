<?php

namespace App\Http\Controllers\backend\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Mail;
class MailController extends Controller
{
    public function mailform()
    {
        return view('backend.pages.email.compose');
    }

//    public function maildata(Request $request)
//    {
//        $name = $request->name;
////        $email = $request->email;
//        $emails = $request->emails;
//        dd($emails);
//        // now email is multiple so i will use this email in array form so i will use this email in array form
//        $sub = $request->sub;
//        $mess = $request->mess;
//        $mailData = [
//            'url'       => 'http://www.zasusoft.com/',
//            'name'      => $name,
//            'email'     => $emails,
//            'subject'   => $sub,
//            'message'   => $mess
//        ];
//        $send_mail = "mdthoratislam1993.oni@gmail.com";
////        Mail::to($send_mail)->send(new SendMail($name, $email, $sub, $mess));
//        $senderMessage = "Thanks for your message , we will reply you in later";
////        Mail::to( $email)->send(new SendMessageToEndUser($name,$senderMessage,$mailData));
//        foreach ($emails as $email) {
//            $mailData['email'] = $email; // Set the email for each iteration
//            Mail::to($email)->send(new SendMessageToEndUser($name, $senderMessage, $mailData));
//        }
//
//
//        $notification = [
//            'message' => 'Mail Send Successfully',
//            'alert-type' => 'success'
//        ];
//        return redirect()->back()->with($notification);
//    }

    public function maildata(Request $request)
    {
        try {
            $name = $request->name;
            $emails = $request->emails;
            $sub = $request->sub;
            $mess = $request->mess;
            if (!isset($emails) || empty($emails))
            {
                throw new \Exception("No email addresses provided.");
            }

            // Prepare mail data
            $mailData = [
                'url'       => 'http://www.zasusoft.com/',
                'name'      => $name,
                'subject'   => $sub,
                'message'   => $mess
            ];

            // Define sender message
            $senderMessage = "Thanks for your message, we will reply to you later.";

            // Loop through each email and send message
            foreach ($emails as $email)
            {
                Mail::to($email)->send(new SendMessageToEndUser($name, $senderMessage, $mailData));
            }

            // If no exception occurred, redirect with success message
            $notification = [
                'message' => 'Mail sent successfully',
                'alert-type' => 'success'
            ];
            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
            // If any exception occurs, redirect with error message
            $notification = [
                'message' => 'Failed to send mail: ' . $e->getMessage(),
                'alert-type' => 'error'
            ];
            return redirect()->back()->with($notification);
        }
    }
    // now i will this mail read in the inbox page
    public function readEmails()
    {
        //data from may smpt mail data
    }
}
