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

    public function index(Request $request)
    {
        try {
            $name = $request->name;
            $email = $request->email;
            $sub = $request->subject;
            $mess = $request->message;

            if (empty($email)) {
                throw new \Exception("No email address provided.");
            }
            $mailData = [
                'url' => 'http://www.zasusoft.com/',
                'name' => $name,
                'subject' => $sub,
                'message' => $mess
            ];
            $senderMessage = "Thanks for your message, we will reply to you later.";
            Mail::to($email)->send(new SendMessageToEndUser($name, $senderMessage, $mailData));
            return response()->json('OK');
        } catch (\Exception $e)
        {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function mailform()
    {
        return view('backend.pages.email.compose');
    }

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
        try {
            // Connect to the IMAP server
            $client = Client::account('default');
            $client->connect();

            // Get all the mailboxes
            $mailboxes = $client->getFolders();

            $emails = [];

            foreach ($mailboxes as $mailbox) {
                // Get all the messages in the mailbox
                $messages = $mailbox->messages()->all()->get();

                foreach ($messages as $message) {
                    $emails[] = [
                        'subject' => $message->getSubject(),
                        'from' => $message->getFrom(),
                        'body' => $message->getTextBody(),
                        'date' => $message->getDate()
                    ];
                }
            }

            // Disconnect from the server
            $client->disconnect();

            return view('backend.pages.email.inbox', ['emails' => $emails]);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to read emails: ' . $e->getMessage(),
                'alert-type' => 'error'
            ];
            return redirect()->back()->with($notification);
        }
    }
}
