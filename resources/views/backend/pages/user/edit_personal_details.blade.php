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
                                                <table class="table table-borderless" id="personalDetailsTable">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">
                                                                <label for="imageInput" class="form-label">
                                                                <img src="{{ asset($user->user_photo_path) }}" alt="image" class="img-thumbnail" style="width: 150px; height: 150px;">
                                                                </label>
                                                                <input type="file" id="imageInput" class="form-control-file" disabled name="user_photo_path">
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
                                                            <th rowspan="4" class="text-center ">
                                                                <button class="btn btn-outline-warning editBtn" onclick="toggleEdit()">
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
                                                                <label for="txtPassword" class="form-label">Password</label>
                                                            </th>
                                                            <th scope="col">
                                                                <label for="txtPasswordConfirmation" class="form-label">Password Confirmation</label>
                                                            </th>
                                                            <th scope="col" >
                                                                <label for="exampleFormControlSelect14" class="form-label">Example select</label>
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
                                                                <select class="form-control rounded-0" id="exampleFormControlSelect14" disabled>
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
                                                                    <img src="{{ asset($user->user_sign_path) }}" alt="image" class="img-thumbnail" style="width: 300px; height: 80px;">
                                                                </label>
                                                                <input type="file" id="signInput" class="form-control-file text-right" disabled name="user_sign_path">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingShadowTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseShadowTwo"
                                                        aria-expanded="false" aria-controls="collapseShadowTwo">
                                                    Collapsible Group Item #2
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseShadowTwo" class="collapse" aria-labelledby="headingShadowTwo" data-parent="#accordionShadow">
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
