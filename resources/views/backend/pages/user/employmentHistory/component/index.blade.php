@extends('backend.pages.user.profile.setting')
@section('profile-setting-content')
    <div class="card card-default">
        <div class="card-header">
            <h2 class="mb-5">Academic Qualifications Settings</h2>
            <button type="submit" class="editAcademic" data-mode="add" data-toggle="modal" data-target="#editAcademicModal">
                Add New
            </button>
        </div>
        <div class="card-body ">
            <table class="table table-bordered" id="" data-user-id="" style="width: 100%">
                <thead>
                <tr>
                    <th  style="width: 5.2%">#</th>
                    <th  style="width: 23.2%">Company</th>
                    <th  style="width: 18.2%">Designation</th>
                    <th  style="width: 14.2%">Address</th>
{{--                    <th scope="col">Responsibilities</th>--}}
                    <th  style="width: 18.2%">Joining Date</th>
                    <th  style="width: 14.2%">Resign Date</th>
                    <th  style="width: 8.2%">Duration</th>

                    <th  style="width: 14.2%">Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                $i=1;
                @endphp
                @foreach($employeementHistory as $userId => $userData)
                    <tr>
                        <td style="vertical-align: middle">{{$i++}}</td>
                        <td style="vertical-align: middle">{{$userData->company_name}}</td>
                        <td style="vertical-align: middle">{{designationArr($userData->designation_id)}}</td>
                        <td style="vertical-align: middle">{{$userData->company_address}}</td>
{{--                        <td style="vertical-align: middle; text-justify: distribute">--}}
{{--                            {{$userData->responsibilities[0]->description}}--}}
{{--                            @foreach($userData->responsibilities as $key => $val)--}}
{{--                                {{$val->description}}--}}
{{--                            @endforeach--}}
{{--                        </td>--}}
                        <td>{{\Carbon\Carbon::parse($userData->joinin_date)->format('d-M-Y')}}</td>
                        <td>
                            @if($userData->leaving_date != null)
                                {{\Carbon\Carbon::parse($userData->leaving_date)->format('d-M-Y')}}
                            @else
                                Continue..
                            @endif
                        </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="editAcademicModal" tabindex="-1" role="dialog" aria-labelledby="editAcademicModal"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAcademicModal">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                    <button type="submit" id="modalButton" data-dismiss="modal" class="btn btn-primary btn-pill">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection




