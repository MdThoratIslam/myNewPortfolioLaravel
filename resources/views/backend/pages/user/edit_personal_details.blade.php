@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-xl-12 col-sm-6">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="sub-title">
                            <i class="mdi mdi-account-plus text-success"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs mb-3" id="pills-tab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-tabs-home2" role="tab"
                                   aria-controls="nav-tabs" aria-selected="true">
                                    <i class="mdi mdi-star-outline"></i>Personal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile2" role="tab"
                                   aria-controls="nav-profile" aria-selected="false">
                                    <i class="mdi mdi-account"></i>
                                    Profile</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-tabs-home2" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="accordion accordion-shadow" id="accordionPersonalDetails">
                                    <div class="card">
                                        <div class="card-header" id="PersonalDetails">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsePersonalDetails" aria-expanded="true" aria-controls="collapsePersonalDetails"> Personal Details</button>
                                            </h2>
                                        </div>
                                        <div id="collapsePersonalDetails" class="collapse show" aria-labelledby="PersonalDetails" data-parent="#accordionPersonalDetails">
                                            <div class="card-body">
                                                <form id="personalDetailsform" enctype="multipart/form-data"  data-url="{{ route('user-update', ['id' => $user->id]) }}">
                                                    @csrf
                                                    <table class="table table-borderless" id="personalDetailsTable" data-user-id="{{$user->id}}">
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
                                                                        @foreach(\App\UseHelpers::$religionArr as $key => $value)
                                                                            <option value="{{$key}}"
                                                                                    @if($key == optional($user->userPersonalDetail)->religion_id) selected @endif>
                                                                                {{$value}}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select class="form-control rounded-0" id="cbo_marital_status" name="marital_status_id" disabled>
                                                                        @foreach(\App\UseHelpers::$maritalStatusArr as $key => $value)
                                                                            <option value="{{$key}}"
                                                                                    @if($key == optional($user->userPersonalDetail)->marital_status_id) selected @endif>
                                                                                {{$value}}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select class="form-control rounded-0" id="cbo_gender" name="gender_id" disabled>
                                                                        @foreach(\App\UseHelpers::$genderArr as $key => $value)
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
                                                                        @foreach(\App\UseHelpers::$bloodGroupArr as $key => $value)
                                                                            <option value="{{$key}}"
                                                                                    @if($key == optional($user->userPersonalDetail)->blood_group_id) selected @endif>
                                                                                {{$value}}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select class="form-control rounded-0" id="cbo_place_of_birth" name="place_of_birth" disabled>
                                                                        @foreach(\App\Models\Districts\Districts::pluck('name', 'id') as $key => $value)
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
                                                                        @foreach(\App\UseHelpers::$nationalityArr as $key => $value)
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
                                                                        @foreach(\App\UseHelpers::$userTypeArr as $key => $value)
                                                                            <option value="{{$key}}"
                                                                                    @if($key == $user->user_type) selected @endif>
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
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingAddressDetails">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAddressDetails"
                                                        aria-expanded="false" aria-controls="collapseAddressDetails">
                                                    Address Details
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseAddressDetails" class="collapse" aria-labelledby="headingAddressDetails" data-parent="#accordionShadow">
                                            <div class="card-body">
                                                <div id="address_div">
                                                    <strong>Present Address:</strong>
                                                    Area/House: {{$user->userPersonalDetail->present_area}},
                                                    District: {{ $user->userPersonalDetail->present_district->name }},
                                                    Division: {{ $user->userPersonalDetail->present_division->name }},
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingShadowThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseShadowThree"
                                                        aria-expanded="false" aria-controls="collapseShadowThree">
                                                    Collapsible Group Item #3
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseShadowThree" class="collapse" aria-labelledby="headingShadowThree" data-parent="#accordionShadow">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
                                                wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                                anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                                probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
