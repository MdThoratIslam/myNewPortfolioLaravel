@extends('backend.pages.user.profile.setting')
@section('profile-setting-content')
    <div class="card card-default">
        <div class="card-header">
            <h2 class="mb-5">Address Settings</h2>
        </div>
        <div class="card-body">
            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <img src="images/user/user-sm-01.jpg" alt="User Image">
                </div>
                <div class="media-body">
                    <span class="title h3">The stars are twinkling.</span>
                    <p>Click the current avatar to change your photo.</p>
                </div>
            </div>
            <form id="personalDetailsform" onload="false" enctype="multipart/form-data"  data-url="{{ route('user-update', ['id' => $user->id]) }}">
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

                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection
