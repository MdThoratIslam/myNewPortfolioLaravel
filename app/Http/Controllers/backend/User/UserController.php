<?php

namespace App\Http\Controllers\backend\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\UseHelpers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Webklex\IMAP\Message;
use Webklex\IMAP\Facades\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;


class UserController extends Controller
{
    public function index()
    {
        return view('errors.404');
    }
    public function create()
    {
        return view('backend.pages.user.profile.index');
    }
    public function store(Request $request)
    {

    }
    public function show(string $id)
    {
        //
    }
    public function edit()
    {
        //return view('backend.pages.user.profile.profile');
        return view('backend.pages.user.profile.profile');
    }
    public function update(Request $request, string $id)
    {
        try
        {
            DB::beginTransaction();
            if ($request->password != $request->confirm_password)
            {
                return response()->json(
                    [
                        'message' => 'Password and Confirm Password not match',
                        'alert_type' => 'error'
                    ], 400);
            }else
            {
                $user = User::with('userPersonalDetail')
                    ->where('id', $id)
                    ->where('status_active', 1)
                    ->where('is_delete', 0)
                    ->first();
                if ($user)
                {
                    $user->update([
                        'name'              => $request->name ?? $user->name,
                        'email'             => $request->email ?? $user->email,
                        'phone'             => $request->phone ?? $user->phone,
                        'user_photo_path'   => $request->hasFile('photoImage') ? $this->saveImage($request->file('photoImage'), 'public/backend/images/user/user_photo/') : $user->user_photo_path,
                        'password'          => $request->password ? bcrypt($request->password) : $user->password,
                        'user_type'         => $request->user_type ?? $user->user_type,
                        'updated_by'        => auth()->user()->id,
                        'updated_at'        => currentDateTime(),
                        ]);
                    if ($user->userPersonalDetail)
                    {
                        $user->userPersonalDetail->update([
                            'father_name'           => $request->father_name ?? $user->userPersonalDetail->father_name,
                            'mother_name'           => $request->mother_name ?? $user->userPersonalDetail->mother_name,
                            'date_of_birth'         => Carbon::parse($request->date_of_birth)->format('Y-m-d') ?? $user->userPersonalDetail->date_of_birth,

                            'marital_status_id'     => $request->marital_status_id ?? $user->userPersonalDetail->marital_status_id,
                            'religion_id'           => $request->religion_id ?? $user->userPersonalDetail->religion_id,
                            'gender_id'             => $request->gender_id ?? $user->userPersonalDetail->gender_id,

                            'blood_group_id'        => $request->blood_group_id ?? $user->userPersonalDetail->blood_group_id,
                            'place_of_birth'        => $request->place_of_birth ?? $user->userPersonalDetail->place_of_birth,
                            'birth_certificate'     => $request->birth_certificate ?? $user->userPersonalDetail->birth_certificate,

                            'nid'                   => $request->nid ?? $user->userPersonalDetail->nid,
                            'passport'              => $request->passport ?? $user->userPersonalDetail->passport,
                            'nationality_id'        => $request->nationality_id ?? $user->userPersonalDetail->nationality_id,
                            'updated_by'        => auth()->user()->id,
                            'updated_at'        => currentDateTime(),
                        ]);
                    } else {
                        $user->userPersonalDetail()->create(
                            [
                                'father_name'           => $request->father_name,
                                'mother_name'           => $request->mother_name,
                                'date_of_birth'         => Carbon::parse($request->date_of_birth)->format('Y-m-d') ,
                                'marital_status_id'     => $request->marital_status_id,
                                'religion_id'           => $request->religion_id,
                                'gender_id'             => $request->gender_id,
                                'blood_group_id'        => $request->blood_group_id,
                                'place_of_birth'        => $request->place_of_birth ,
                                'birth_certificate'     => $request->birth_certificate ,
                                'nid'                   => $request->nid,
                                'passport'              => $request->passport,
                                'nationality_id'        => $request->nationality_id,
                                'created_by'            => auth()->user()->id,
                                'created_at'            => currentDateTime(),
                                'updated_by'            => null,
                                'updated_at'            => null
                            ]);
                    }
                    DB::commit();
                    return response()->json(['message' => 'User updated successfully', 'alert_type' => 'success']);
                } else {
                    DB::rollBack();
                    return response()->json(['message' => 'User not found', 'alert_type' => 'error'], 404);
                }
            }
        } catch (\Exception $exception)
        {
            DB::rollBack();
            return response()->json(['message' => $exception->getMessage(), 'alert_type' => 'error'], 500);
        }

    }
    public function destroy(string $id)
    {
        //
    }
    // setting function
    public function setting()
    {
        $user = User::with([
            'userPersonalDetail' => function ($query)
            {
                $query->select('id', 'user_id', 'father_name', 'mother_name', 'present_area', 'present_police_station_id', 'present_district_id', 'present_division_id', 'parmament_area','parmament_police_station_id', 'present_post_offices_id', 'parmament_district_id', 'parmament_division_id', 'nid', 'passport', 'birth_certificate', 'date_of_birth', 'place_of_birth', 'nationality_id', 'religion_id', 'blood_group_id', 'marital_status_id', 'gender_id', 'height', 'weight', 'status_active', 'is_delete');
            },
            'userPersonalDetail.present_upazila' => function ($query) {
                $query->select('id', 'en_name');
            },
            'userPersonalDetail.present_district' => function ($query) {
                $query->select('id', 'en_name');
            },
            'userPersonalDetail.present_division' => function ($query) {
                $query->select('id', 'en_name');
            }
        ])
            ->where('id', auth()->user()->id)
            ->where('status_active', 1)
            ->where('is_delete', 0)
            ->first();
//        return view('backend.pages.user.edit_personal_details', compact('user'));

        return view('backend.pages.user.profile.components.profile',compact('user'));
    }
    private function saveImage($image, $directory)
    {
//        $image = $request->file('filePhoto');
        $imageName = rand(0,6) . '.' . $image->getClientOriginalExtension();
//        $directory = 'new_assets/assets/userImage/';
        $imgUrl = $directory . $imageName;
        $image->move($directory, $imageName);
        return $imgUrl;
    }
    private function savePDF($pdf, $directory)
    {
        // Generate a unique name for the PDF file
        $pdfName = rand(0,4) . '_' . time() . '.' . $pdf->getClientOriginalExtension();
        // Construct the path for storing the PDF file
        $pdfUrl = $directory . $pdfName;
        // Move the PDF file to the specified directory
        $pdf->move($directory, $pdfName);
        // Return the URL of the saved PDF file
        return $pdfUrl;
    }
    public function emailInbox()
    {
        return view('backend.pages.email.inbox');
    }

    public function readEmails()
    {
//        try {
//            // Get IMAP configuration from .env file
//            $host           = env('IMAP_HOST');
//            $port           = env('IMAP_PORT');
//            $encryption     = env('IMAP_ENCRYPTION');
//            $validateCert   = env('IMAP_VALIDATE_CERT', true); // Default to true if not specified
//            $username       = env('IMAP_USERNAME');
//            $password       = env('IMAP_PASSWORD');
//            $defaultAccount = env('IMAP_DEFAULT_ACCOUNT');
//            $protocol   = env('IMAP_PROTOCOL');
//
//            // Set IMAP configuration
//            $test = LaravelIMAP::account($defaultAccount)->setConfig([
//                'host' => $host,
//                'port' => $port,
//                'encryption' => $encryption,
//                'validate_cert' => $validateCert,
//                'username' => $username,
//                'password' => $password,
//                'protocol' => $protocol,
//                'options' => [],
//            ]);
//            // now i want to read my emails from the inbox folder
//            $inbox = LaravelIMAP::account($defaultAccount)->getFolder('INBOX');
//            $messages = $inbox->query()->get();
//            dd($messages);
//            return response()->json(['messages' => $messages]);
//        } catch (\Exception $e) {
//            // Handle exceptions
//            echo "Error: " . $e->getMessage();
//        }
        /*try {
            // Get IMAP configuration from .env file
            $host           = env('IMAP_HOST');
            $port           = env('IMAP_PORT');
            $encryption     = env('IMAP_ENCRYPTION');
            $validateCert   = env('IMAP_VALIDATE_CERT', true);
            $username       = env('IMAP_USERNAME');
            $password       = env('IMAP_PASSWORD');
            $defaultAccount = env('IMAP_DEFAULT_ACCOUNT');
            $protocol       = env('IMAP_PROTOCOL');
            $defaultFolder  = env('IMAP_DEFAULT_FOLDER');

            // Set IMAP configuration
            $client = Client::account($defaultAccount)->connect([
                'host' => $host,
                'port' => $port,
                'encryption' => $encryption,
                'validate_cert' => $validateCert,
                'username' => $username,
                'password' => $password,
                'protocol' => $protocol,
                'options' => [],
            ]);

            // Check if connected
            if ($client->ping()) {
                // If connected, fetch the inbox
                $inbox = Cache::remember('inbox', 60, function () use ($client, $defaultFolder) {
                    // Fetch inbox messages
                    return $client->getFolder($defaultFolder)->messages()->paginate(10);
                });
                $pagination = $inbox->links();

                // Return JSON response
                return Response::json(['inbox' => $inbox, 'pagination' => $pagination]);
            } else {
                // If not connected, handle the error
                return Response::json(['error' => 'Could not connect to the IMAP server'], 500);
            }
        } catch (\Exception $e) {
            // Handle exceptions
            return Response::json(['error' => 'Error: ' . $e->getMessage()], 500);
        }
//        try {
//            // Get IMAP configuration from .env file
//            $host           = (string) env('IMAP_HOST');
//            $port           = (int) env('IMAP_PORT');
//            $encryption     = (string) env('IMAP_ENCRYPTION');
//            $validateCert   = (bool) env('IMAP_VALIDATE_CERT', true);
//            $username       = (string) env('IMAP_USERNAME');
//            $password       = (string) env('IMAP_PASSWORD');
//            $defaultAccount = (string) env('IMAP_DEFAULT_ACCOUNT');
//            $protocol       = (string) env('IMAP_PROTOCOL');
//
//
//
//            if ($mbox){
//                return true;}
//            else{
//                return false;}
//
//            $imap = LaravelIMAP::account($defaultAccount)->setConfig([
//                'host' => $host,
//                'port' => $port,
//                'encryption' => $encryption,
//                'validate_cert' => $validateCert,
//                'username' => $username,
//                'password' => $password,
//                'protocol' => $protocol,
//                'options' => [],
//            ]);
//
//            if ($imap->isConnected())
//            {
//                $inbox = Cache::remember('inbox', 60, function () use ($imap) {
//                    return paginate($imap->getFolder('INBOX')->query()->get(), 10);
//                });
//                $pagination = $inbox->links();
//                return response()->json(['inbox' => $inbox, 'pagination' => $pagination]);
//            } else {
//                // Could not connect to the IMAP server
//                return response()->json(['error' => 'Could not connect to the IMAP server'], 500);
//            }
//        } catch (\Exception $e) {
//            // Handle exceptions
//            return response()->json(['error' => 'Error: ' . $e->getMessage()], 500);
//        }*/

        /** @var \Webklex\PHPIMAP\Client $client */
        //$client = Client::account('default');

            $host           = (string) env('IMAP_HOST');
            $port           = (int) env('IMAP_PORT');
            $encryption     = (string) env('IMAP_ENCRYPTION');
            $validateCert   = (bool) env('IMAP_VALIDATE_CERT', true);
            $username       = (string) env('IMAP_USERNAME');
            $password       = (string) env('IMAP_PASSWORD');
            $defaultAccount = (string) env('IMAP_DEFAULT_ACCOUNT');
            $protocol       = (string) env('IMAP_PROTOCOL');

            $client = Client::account($defaultAccount)->connect([
                'host' => $host,
                'port' => $port,
                'encryption' => $encryption,
                'validate_cert' => $validateCert,
                'username' => $username,
                'password' => $password,
                'protocol' => $protocol,
                'options' => [],
            ]);
        $client->connect();

//Get all Mailboxes
        /** @var \Webklex\PHPIMAP\Support\FolderCollection $folders */
        $folders = $client->getFolders();

//Loop through every Mailbox
        /** @var \Webklex\PHPIMAP\Folder $folder */
        foreach($folders as $folder){

            //Get all Messages of the current Mailbox $folder
            /** @var \Webklex\PHPIMAP\Support\MessageCollection $messages */
            $messages = $folder->messages()->all()->get();

            /** @var \Webklex\PHPIMAP\Message $message */
            foreach($messages as $message){
                echo $message->getSubject().'<br />';
                echo 'Attachments: '.$message->getAttachments()->count().'<br />';
                echo $message->getHTMLBody();

                //Move the current Message to 'INBOX.read'
                if($message->move('INBOX.read') == true){
                    echo 'Message has ben moved';
                }else{
                    echo 'Message could not be moved';
                }
            }
        }
    }
}
