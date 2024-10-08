@extends('backend.oldmaster')
@section('title', 'Dashboard')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="{{ route('mail.send') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail">Your Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail">Your Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Subject</label>
                        <input type="text" class="form-control" name="sub" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Message</label>
                        <textarea class="form-control" name="mess" rows="10"
                                  required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit">Send Mail</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="content">
        <div class="email-wrapper rounded border bg-white">
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-4 col-xl-3 col-xxl-2">
                    <div class="email-left-column email-options p-4 p-xl-5">
                        <a href="email-compose.html" class="btn btn-block btn-primary btn-pill mb-4 mb-xl-5">Compose</a>
                        <ul class="pb-2">
                            <li class="d-block active mb-4">
                                <a href="email-inbox.html">
                                    <i class="mdi mdi-download mr-2"></i> Inbox</a>
                                <span class="badge badge-secondary">20</span>
                            </li>
                            <li class="d-block mb-4">
                                <a href="#">
                                    <i class="mdi mdi-star-outline mr-2"></i> Favorite</a>
                                <span class="badge badge-secondary">56</span>
                            </li>
                            <li class="d-block mb-4">
                                <a href="#">
                                    <i class="mdi mdi-playlist-edit mr-2"></i> Drafts</a>
                            </li>
                            <li class="d-block mb-4">
                                <a href="#">
                                    <i class="mdi mdi-open-in-new mr-2"></i> Sent Mail</a>
                            </li>
                            <li class="d-block mb-4">
                                <a href="#">
                                    <i class="mdi mdi-trash-can-outline mr-2"></i> Trash</a>
                            </li>
                        </ul>
                        <p class="text-dark font-weight-medium">Labels</p>
                        <ul>
                            <li class="mt-4">
                                <a href="#">
                                    <i class="mdi mdi-checkbox-blank-circle-outline text-primary mr-3"></i>Work</a>
                            </li>
                            <li class="mt-4">
                                <a href="#">
                                    <i class="mdi mdi-checkbox-blank-circle-outline text-warning mr-3"></i>Private</a>
                            </li>
                            <li class="mt-4">
                                <a href="#">
                                    <i class="mdi mdi-checkbox-blank-circle-outline text-danger mr-3"></i>Family</a>
                            </li>
                            <li class="mt-4">
                                <a href="#">
                                    <i class="mdi mdi-checkbox-blank-circle-outline text-success mr-3"></i>Friends</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9 col-xxl-10">
                    <div class="email-right-column  email-body p-4 p-xl-5">
                        <div class="email-body-head mb-5 ">
                            <h4 class="text-dark">New Message</h4>
                        </div>
                        <form class="email-compose">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleEmail" placeholder="To: ">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleSubject" placeholder="Subject ">
                            </div>
                            <div id="standalone">
                                <div id="toolbar">
                        <span class="ql-formats">
                          <select class="ql-font"></select>
                          <select class="ql-size"></select>
                        </span>
                                    <span class="ql-formats">
                          <button class="ql-bold"></button>
                          <button class="ql-italic"></button>
                          <button class="ql-underline"></button>
                        </span>
                                    <span class="ql-formats">
                          <select class="ql-color"></select>
                        </span>
                                    <span class="ql-formats">
                          <button class="ql-blockquote"></button>
                        </span>
                                    <span class="ql-formats">
                          <button class="ql-list" value="ordered"></button>
                          <button class="ql-list" value="bullet"></button>
                          <button class="ql-indent" value="-1"></button>
                          <button class="ql-indent" value="+1"></button>
                        </span>
                                    <span class="ql-formats">
                          <button class="ql-direction" value="rtl"></button>
                          <select class="ql-align"></select>
                        </span>
                                </div>
                            </div>
                            <div id="editor"></div>
                            <div class="email-attachment mt-4 mb-3">
                                <i class="fa fa-paperclip fa-1x"></i>
                                <span class="text-dark d-inline-block font-weight-medium pl-2">Attachment</span>
                            </div>
                        </form>
                        <div class="border rounded mb-5">
                            <form action="./" class="dropzone"></form>
                        </div>
                        <button class="btn btn-primary btn-pill mb-5" type="submit">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
