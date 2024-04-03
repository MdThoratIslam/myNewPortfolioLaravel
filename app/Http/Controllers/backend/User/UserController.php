<?php

namespace App\Http\Controllers\backend\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\UseHelpers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Webklex\IMAP\Facades\Client;
use Webklex\IMAP\Facades\Client as LaravelIMAP;
use Webklex\IMAP\Message;


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
                        'updated_at'        => UseHelpers::currentDateTime(),
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
                            'updated_at'        => UseHelpers::currentDateTime(),
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
                                'created_at'            => UseHelpers::currentDateTime(),
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
                $query->select('id', 'user_id', 'father_name', 'mother_name', 'present_area', 'present_upazila_id', 'present_district_id', 'present_division_id', 'parmament_area', 'parmament_upazila_id', 'parmament_district_id', 'parmament_division_id', 'nid', 'passport', 'birth_certificate', 'date_of_birth', 'place_of_birth', 'nationality_id', 'religion_id', 'blood_group_id', 'marital_status_id', 'gender_id', 'height', 'weight', 'status_active', 'is_delete');
            },
            'userPersonalDetail.present_upazila' => function ($query) {
                $query->select('id', 'name');
            },
            'userPersonalDetail.present_district' => function ($query) {
                $query->select('id', 'name');
            },
            'userPersonalDetail.present_division' => function ($query) {
                $query->select('id', 'name');
            }
        ])
            ->where('id', auth()->user()->id)
            ->where('status_active', 1)
            ->where('is_delete', 0)
            ->first();
//        return view('backend.pages.user.edit_personal_details', compact('user'));

        return view('backend.pages.user.profile.component.profile',compact('user'));
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
        try {
            // Get IMAP configuration from .env file
            $host           = env('IMAP_HOST');
            $port           = env('IMAP_PORT');
            $encryption     = env('IMAP_ENCRYPTION');
            $validateCert   = env('IMAP_VALIDATE_CERT', true); // Default to true if not specified
            $username       = env('IMAP_USERNAME');
            $password       = env('IMAP_PASSWORD');
            $defaultAccount = env('IMAP_DEFAULT_ACCOUNT');
            $protocol       = env('IMAP_PROTOCOL');

            // Set IMAP configuration
           $imap = LaravelIMAP::account($defaultAccount)->setConfig([
                'host' => $host,
                'port' => $port,
                'encryption' => $encryption,
                'validate_cert' => $validateCert,
                'username' => $username,
                'password' => $password,
                'protocol' => $protocol,
                'options' => [],
            ]);
            $inbox = $imap->getFolder('INBOX');
            $messages = $imap->getFolder('INBOX')->query()->get();
            $formattedMessages = [];
            foreach ($messages as $message) {
                // Customize the format as per your need
                $formattedMessages[] = 
                    [
                        'subject' => $message->getSubject(),
                        'from' => $message->getFrom(),
                        'date' => $message->getDate(),
                     ];
            }
            return  $formattedMessages;
        } catch (\Exception $e) {
            // Handle exceptions
            echo "Error: " . $e->getMessage();
        }
    }
}
