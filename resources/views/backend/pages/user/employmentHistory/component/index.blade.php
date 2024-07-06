@extends('backend.pages.user.profile.setting')
@section('profile-setting-content')
    <div class="card card-default">
        <div class="card-header">
            <h2 class="mb-5">Academic Qualifications Settings</h2>
            <button type="submit" class="editAcademic" data-mode="add" data-toggle="modal" data-target="#editAcademicModal">
                Add New
            </button>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="" data-user-id="">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Address</th>
                    <th scope="col">Responsibilities</th>
                    <th scope="col">Joining Date</th>
                    <th scope="col">Resign Date</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Achievement</th>
                    <th scope="col">Result</th>
                    <th scope="col">Out of CGPA</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
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




