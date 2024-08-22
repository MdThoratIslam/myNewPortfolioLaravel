@extends('backend.auth.oldindex')
@section('title')
    Sign Up
@endsection
@section('auth_content')
    <div class="row justify-content-center">
        <div class="col-lg-6 col-xl-5 col-md-10 ">
            <div class="card card-default mb-0">
                <div class="card-header pb-0">
                    <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                        <a class="w-auto pl-0" href="{{route('register')}}">
                            <img src="{{asset('backend/public/backend/images/logo.png')}}" alt="Mono">
                            <span class="brand-name text-dark">MONO</span>
                        </a>
                    </div>
                </div>
                <div class="card-body px-5 pb-5 pt-0">
                    <h4 class="text-dark text-center mb-5">Sign Up</h4>
                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <input type="text"
                                       class="form-control input-lg {{ $errors->has('name') ? 'is-invalid border-danger' : '' }}"
                                       id="name" name="name" aria-describedby="nameHelp" placeholder="Name" required>
                                @if ($errors->has('name'))
                                    <div class="text-daborder-danger small mt-1 invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                <input type="email"
                                       class="form-control input-lg {{ $errors->has('email') ? 'is-invalid border-danger' : '' }}"
                                       id="email" name="email" aria-describedby="emailHelp" placeholder="Email"
                                       required>
                                @if ($errors->has('email'))
                                    <div class="text-daborder-danger small mt-1 invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group col-md-12 ">
                                <input type="password"
                                       class="form-control input-lg {{ $errors->has('password') ? 'is-invalid border-danger' : '' }}"
                                       id="password" placeholder="Password" name="password" required
                                       autocomplete="new-password">
                                @if ($errors->has('password'))
                                    <div class="text-daborder-danger small mt-1 invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group col-md-12 ">
                                <input type="password"
                                       class="form-control input-lg {{ $errors->has('password_confirmation') ? 'is-invalid border-danger' : '' }}"
                                       id="password_confirmation" placeholder="Confirm Password"
                                       name="password_confirmation" required autocomplete="new-password">
                                @if ($errors->has('password_confirmation'))
                                    <div class="text-daborder-danger small mt-1 invalid-feedback">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex justify-content-between mb-3">

                                    <div class="custom-control custom-checkbox mr-3 mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">I Agree the terms and
                                            conditions.</label>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary btn-pill mb-4">Sign Up</button>

                                <p>Already have an account?
                                    <a class="text-blue" href="sign-in.html">Sign in</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


