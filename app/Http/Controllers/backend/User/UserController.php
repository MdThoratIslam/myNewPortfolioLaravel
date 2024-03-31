<?php

namespace App\Http\Controllers\backend\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\UseHelpers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('errors.404');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.user.create_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = User::with('userPersonalDetail')->where('id', auth()->user()->id)->where('status_active', 1)->where('is_delete', 0)->first();
        //return $user;
        return view('backend.pages.user.edit_personal_details', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function saveImage($image, $directory)
    {
//        $image = $request->file('filePhoto');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
//        $directory = 'new_assets/assets/userImage/';
        $imgUrl = $directory . $imageName;
        $image->move($directory, $imageName);
        return $imgUrl;
    }
}
