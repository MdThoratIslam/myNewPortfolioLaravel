@extends('backend.pages.user.profile.setting')
@section('profile-setting-content')
    <div class="card card-default">
        <div class="card-header">
            <h2 class="mb-5">Academic Qualifications Settings</h2>
            <button type="button" class="editAcademic" data-mode="edit" data-toggle="modal" data-target="#editAcademicModal">
                Add New
            </button>
        </div>
        <div class="card-body">
                <table class="table table-bordered" id="" data-user-id="">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Major</th>
                            <th scope="col">InstituteName</th>
                            <th scope="col">Starting</th>
                            <th scope="col">Ending</th>
                            <th scope="col">Passing</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Achievement</th>
                            <th scope="col">Result</th>
                            <th scope="col">Out of CGPA</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php($i = 1)
                        @foreach($academicQualifications as $index => $row)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$row->examTitle}}</td>
                                <td>{{$row->concentrationMajor}}</td>
                                <td>{{$row->instituteName}}</td>
                                <td>{{$row->startingYear}}</td>
                                <td>{{$row->endingYear}}</td>
                                <td>{{$row->passingYear}}</td>
                                <td>{{$row->duration}}</td>
                                <td>{{$row->achievement}}</td>
                                <td>{{$row->result}}</td>
                                <td>{{$row->outOf}}</td>
                                <td>
                                    <button type="button" class="editAcademic" data-mode="edit" data-obj="{{$row}}" data-toggle="modal" data-target="#editAcademicModal">
                                        <i class="mdi mdi-open-in-new" ></i>
                                    </button>
{{--                                    <button type="button" class="editAcademic" data-mode="edit" data-id="{{$index}}" data-examTitle="{{$row->examTitle}}" data-concentration-major="Science"--}}
{{--                                            data-institute-name="XYZ High School" data-result="A" data-out-of="100" data-achievement="Top Scorer" data-toggle="modal" data-target="#editAcademicModal">--}}
{{--                                        <i class="mdi mdi-open-in-new" ></i>--}}
{{--                                    </button>--}}
                                    &nbsp;|&nbsp;
                                    <button type="button" class="deleteAcademic" data-id="{{$row->id}}">
                                        <i class="mdi mdi-delete" ></i>
                                    </button>
{{--                                    <form action="{{route('academic-qualification.destroy', $row->id)}}" method="post">--}}
                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @php($i++)
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    <!-- Large Modal -->
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
{{--                     <form id="editAcademicForm" data-url="{{ route('academic-qualification.update', ['id' => $user->id]) }}">--}}
                     <form method="" action="" class="">
                        @csrf
                         <input type="hidden" value="" id="academic_id">
                         <div class="row">
                             <!-- Exam Title -->
                             <div class="col-md-6">
                                 <label class="text-dark font-weight-medium" for="">Exam Title</label>
                                 <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text mdi mdi-file-document-outline" id="basic-addon1"></span>
                                     </div>
                                     <input type="text" class="form-control" id="txtExamTitle" name="examTitle">
                                 </div>
                             </div>
                             <!-- concentrationMajor input -->
                             <div class="col-md-6">
                                 <label class="text-dark font-weight-medium">Concentration Major</label>
                                 <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text mdi mdi-book-multiple-minus" id="basic-addon1"></span>
                                     </div>
                                     <input type="text" class="form-control" id="txtConcentrationMajor" name="concentrationMajor">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <!-- Institute Name -->
                                 <label class="text-dark font-weight-medium">Institute Name</label>
                                 <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text mdi mdi-school" id="basic-addon1"></span>
                                     </div>
                                     <input type="text" class="form-control" id="txtInstituteName" name="instituteName">
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <!-- Result -->
                                 <label class="text-dark font-weight-medium">Result</label>
                                 <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text mdi mdi-certificate" id="basic-addon1"></span>
                                     </div>
                                     <input type="text" class="form-control" id="nbrResult" name="result">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <!-- Out Of -->
                                 <label class="text-dark font-weight-medium">Out Of</label>
                                 <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text mdi mdi-library" id="basic-addon1"></span>
                                     </div>
                                     <input type="number" class="form-control" id="nbrOutOf" name="outOf">
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <label class="text-dark font-weight-medium">Achievement</label>
                                 <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text mdi mdi-archive" id="basic-addon1"></span>
                                     </div>
                                     <input type="text" class="form-control" id="yearAchievement" name="achievement">
                                 </div>
                             </div>
                         </div>
                     </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                    <button type="submit" id="modalButton" class="btn btn-primary btn-pill">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

{{--    please Academic Information Edit when click Edit Button  wise a modal create --}}



@endsection

<script>

</script>





