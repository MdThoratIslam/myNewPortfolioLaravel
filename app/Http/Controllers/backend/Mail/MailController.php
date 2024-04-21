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

    public function maildata(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $sub = $request->sub;
        $mess = $request->mess;
        $mailData = [
            'url'       => 'http://www.zasusoft.com/',
            'name'      => $name,
            'email'     => $email,
            'subject'   => $sub,
            'message'   => $mess
        ];
        $send_mail = "mdthoratislam1993.oni@gmail.com";
        Mail::to($send_mail)->send(new SendMail($name, $email, $sub, $mess));
        $senderMessage = "Thanks for your message , we will reply you in later";
        Mail::to( $email)->send(new
        SendMessageToEndUser($name,$senderMessage,$mailData));

        $notification = [
            'message' => 'Mail Send Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
    // now i will this mail read in the inbox page
    public function readEmails()
    {
        //data from may smpt mail data
    }
}
