@extends('backend.pages.email.index')
@section('email_content')
    <div class="email-right-column  email-body p-4 p-xl-5">
        <div class="email-body-head mb-5 ">
            <h4 class="text-dark">New Message</h4>
        </div>
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
                <textarea class="form-control" name="mess" rows="10" required></textarea>
            </div>




{{--            <div class="email-attachment mt-4 mb-3">--}}
{{--                <i class="fa fa-paperclip fa-1x"></i>--}}
{{--                <span class="text-dark d-inline-block font-weight-medium pl-2">Attachment</span>--}}
{{--            </div>--}}
            <div class="text-right">
                <button type="submit" class="btn btn-sm btn-success">Send Mail</button>
            </div>
        </form>
{{--        <div class="border rounded mb-5">--}}
{{--            <form action="./" class="dropzone"></form>--}}
{{--        </div>--}}
    </div>
@endsection

