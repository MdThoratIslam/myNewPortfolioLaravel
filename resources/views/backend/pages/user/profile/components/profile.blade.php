@extends('backend.pages.user.profile.setting')
@section('profile-setting-content')
    <div class="card card-default">
        <div class="card-header">
            <h2 class="mb-5">Profile Settings</h2>
        </div>
        <div class="card-body">
            <form id="personalDetailsform" onload="false" enctype="multipart/form-data"  data-url="{{ route('user-update', ['id' => $user->id]) }}">
                @csrf
                <table class="table table-borderless table-responsive" id="personalDetailsTable" data-user-id="{{$user->id}}">
                    <thead>
                        <tr>
                            <th scope="col">
                                <label for="user_photo_path" class="form-label">
                                    <img id="user_photo" src="{{ asset($user->user_photo_path) }}" alt="image" class="img-thumbnail" style="width: 150px; height: 150px;">
                                </label>
                                <input type="file" id="user_photo_path" class="form-control-file" disabled name="user_photo_path" value="{{$user->user_photo_path}}">
                            </th>
                            <th scope="col" colspan="4">&nbsp;</th>
                        </tr>
                        <tr>
                            <th scope="col">
                                <label for="txtName" class="form-label">Name</label>
                            </th>
                            <th scope="col">
                                <label for="nbrPhone" class="form-label">Phone</label>
                            </th>
                            <th scope="col">
                                <label for="txtEmail" class="form-label">Email</label>
                            </th>
                            <th rowspan="10" class="text-center ">
                                <button type="button" class="btn btn-outline-warning editBtn" onclick="toggleEdit()">
                                    <i class="mdi mdi-content-save-edit-outline editBtn"></i>
                                    Edit
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" value="{{$user->name}}" id="txtName" name="name" class="form-control" disabled>
                            </td>
                            <td>
                                <input type="text"  value="{{$user->phone}}" id="nbrPhone" name="phone" class="form-control" disabled>
                            </td>
                            <td>
                                <input type="email"  value="{{$user->email}}" id="txtEmail" class="form-control" disabled>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">
                                <label for="txtFatherName " class="form-label">Father's Name</label>
                            </th>
                            <th scope="col">
                                <label for="txtMotherName " class="form-label">Mother's Name</label>
                            </th>
                            <th>
                                <label for="txtDateofBirth " class="form-label">Date of Birth</label>

                            </th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" value="{{ optional($user->userPersonalDetail)->father_name }}" id="txtFatherName" name="father_name" class="form-control" disabled>
                            </td>
                            <td>
                                <input type="text"  value="{{ optional($user->userPersonalDetail)->mother_name }}" id="txtMotherName" name="mother_name" class="form-control" disabled>
                            </td>
                            <td>
                                <input type="text"  value="{{ optional($user->userPersonalDetail)->date_of_birth ? \Carbon\Carbon::parse(optional($user->userPersonalDetail)->date_of_birth)->format('d-M-Y') : '' }}" id="txtDateofBirth" name="date_of_birth" class="form-control" disabled>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">
                                <label for="cbo_religion" class="form-label">Religion</label>
                            </th>
                            <th scope="col">
                                <label for="cbo_marital_status" class="form-label">Marital Status</label>
                            </th>
                            <th>
                                <label for="cbo_gender" class="form-label">Gender</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <select class="form-control rounded-0" id="cbo_religion" name="religion_id" disabled>
                                    @foreach(religionArr() as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->religion_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select class="form-control rounded-0" id="cbo_marital_status" name="marital_status_id" disabled>
                                    @foreach(maritalStatusArr() as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->marital_status_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select class="form-control rounded-0" id="cbo_gender" name="gender_id" disabled>
                                    @foreach(gender() as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->gender_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">
                                <label for="cbo_blood_group_id" class="form-label">Blood Group</label>
                            </th>
                            <th scope="col">
                                <label for="cbo_place_of_birth" class="form-label">Place Of Birth</label>
                            </th>
                            <th>
                                <label for="nbr_birth_certificate" class="form-label">Birth Certificate</label>

                            </th>
                        </tr>
                        <tr>
                            <td>
                                <select class="form-control rounded-0" id="cbo_blood_group_id" name="blood_group_id" disabled>
                                    @foreach(blood_group() as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->blood_group_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select class="form-control rounded-0" id="cbo_place_of_birth" name="place_of_birth" disabled>
                                    @foreach(\App\Models\Districts\Districts::pluck('en_name', 'id') as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->place_of_birth) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="text" value="{{optional($user->userPersonalDetail)->birth_certificate}}" id="nbr_birth_certificate" name="nbr_birth_certificate" class="form-control" disabled>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">
                                <label for="cbo_nationality_id" class="form-label">Nationality</label>
                            </th>
                            <th scope="col">
                                <label for="txtPassportNo" class="form-label">Passport No</label>
                            </th>
                            <th>
                                <label for="nbr_nid" class="form-label">Nid No</label>

                            </th>
                        </tr>
                        <tr>
                            <td>
                                <select class="form-control rounded-0" id="cbo_nationality_id" name="nationality_id" disabled>
                                    @foreach(nationalityArr() as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->nationality_id)->blood_group_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="text" value="{{optional($user->userPersonalDetail)->passport}}" id="txtPassportNo" name="passport" class="form-control" disabled>
                            </td>
                            <td>
                                <input type="text" value="{{optional($user->userPersonalDetail)->nid}}" id="nbr_nid" name="nid" class="form-control" disabled>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">
                                <label for="txtPassword" class="form-label">Password</label>
                            </th>
                            <th scope="col">
                                <label for="txtPasswordConfirmation" class="form-label">Password Confirmation</label>
                            </th>
                            <th scope="col" >
                                <label for="cbo_user_type" class="form-label">User Type</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" id="txtPassword" name="password" class="form-control" disabled>
                            </td>
                            <td>
                                <input type="password" id="txtPasswordConfirmation" name="password_confirmation" class="form-control" disabled>
                            </td>
                            <td>
                                <select class="form-control rounded-0" id="cbo_user_type" name="user_type" disabled>
                                    @foreach(userTypeArr() as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == $user->user_type) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <label for="txtPresentAddress" class="form-label">Present Address</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <input type="text" id="txtPresentAddress" name="present_address" class="form-control" value="{{optional($user->userPersonalDetail)->present_area}}" disabled />
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3" scope="col">Present Address</th>
                        </tr>
                        <tr>
                            <th scope="col">
                                <label for="cbo_present_division_id" class="form-label">Division</label>
                            </th>
                            <th scope="col">
                                <label for="cbo_present_district_id" class="form-label">District</label>
                            </th>
                            <th scope="col">
                                <label for="txtPostalCode" class="form-label">Police Station</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <select class="form-control rounded-0" id="cbo_present_division_id" name="present_division_id" disabled>
                                    @foreach(\App\Models\Divisions\Divisions::pluck('en_name', 'id') as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->present_division_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select class="form-control rounded-0" id="cbo_present_district_id" name="present_district_id" disabled>
                                    @foreach(\App\Models\Districts\Districts::pluck('en_name','id') as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->present_district_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select class="form-control rounded-0" id="cbo_present_district_id" name="present_district_id" disabled>
                                    @foreach(\App\Models\PoliceStation::pluck('en_name','id') as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->present_police_station_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">
                                <label for="cbo_present_division_id" class="form-label">Post Office</label>
                            </th>
                            <th scope="col">
                                <label for="cbo_present_district_id" class="form-label">Post Code</label>
                            </th>
                        </tr>

                        <tr>
                            <td  colspan="2">
                                <select class="form-control rounded-0" id="cbo_present_division_id" name="present_division_id" disabled>
                                    @foreach(\App\Models\PostOffice::pluck('en_name','id') as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->present_post_offices_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select class="form-control rounded-0" id="cbo_present_division_id" name="present_division_id" disabled>
                                    @foreach(\App\Models\PostOffice::pluck('code','id') as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->present_post_offices_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="3">Parmament Address</th>
                        </tr>

                        <tr>
                            <th scope="col">
                                <label for="cbo_present_division_id" class="form-label">Parmament Division</label>
                            </th>
                            <th scope="col">
                                <label for="cbo_present_district_id" class="form-label">Parmament District</label>
                            </th>
                            <th scope="col">
                                <label for="txtPostalCode" class="form-label">Parmament Code</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <select class="form-control rounded-0" id="cbo_present_division_id" name="present_division_id" disabled>
                                    @foreach(\App\Models\Divisions\Divisions::pluck('en_name', 'id') as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->present_division_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select class="form-control rounded-0" id="cbo_present_district_id" name="present_district_id" disabled>
                                    @foreach(\App\Models\Districts\Districts::pluck('en_name','id') as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->parmament_district_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select class="form-control rounded-0" id="cbo_present_district_id" name="present_district_id" disabled>
                                    @foreach(\App\Models\PoliceStation::pluck('en_name','id') as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->parmament_police_station_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th scope="col">
                                <label for="cbo_present_division_id" class="form-label">Post Office</label>
                            </th>
                            <th scope="col">
                                <label for="cbo_present_district_id" class="form-label">Post Code</label>
                            </th>
                        </tr>

                        <tr>
                            <td  colspan="2">
                                <select class="form-control rounded-0" id="cbo_present_division_id" name="present_division_id" disabled>
                                    @foreach(\App\Models\PostOffice::pluck('en_name','id') as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->parmament_post_offices_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select class="form-control rounded-0" id="cbo_present_division_id" name="present_division_id" disabled>
                                    @foreach(\App\Models\PostOffice::pluck('code','id') as $key => $value)
                                        <option value="{{$key}}"
                                                @if($key == optional($user->userPersonalDetail)->parmament_post_offices_id) selected @endif>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="text-right">
                                <label for="signInput" class="form-label">
                                    <img id="signImage" src="{{ asset($user->user_sign_path) }}" alt="image" class="img-thumbnail" style="width: 300px; height: 80px;">
                                </label>
                                <input type="file" id="user_sign_path" class="form-control-file text-right" name="user_sign_path" disabled>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection
