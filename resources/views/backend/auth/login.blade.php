@extends('backend.auth.index')
@section('title')
    Sign In
@endsection
@section('auth_content')
<section class="login-content">
    <div class="logo">
        <h1>Owner</h1>
    </div>
    <div class="login-box">
        <form class="login-form" action="{{route('login')}}" method="POST">
            @csrf
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
            <div class="form-group">
                <label class="control-label">EMAIL</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid border-danger' : '' }}"
                       id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required
                       value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <div class="text-danger small mt-1 invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="control-label">PASSWORD</label>
                <input type="password"
                       class="form-control {{ $errors->has('password') ? 'is-invalid border-danger' : '' }}"
                       id="password" placeholder="Password" name="password" required
                       autocomplete="new-password">
                @if ($errors->has('password'))
                    <div class="text-danger small mt-1 invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <div class="utility">
                    <div class="animated-checkbox">
                        <label>
                            <input type="checkbox"><span class="label-text">Stay Signed in</span>
                        </label>
                    </div>
                    <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
                </div>
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block  btn-auth"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
            </div>
        </form>
        <form class="forget-form" action="index.html">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
            <div class="form-group">
                <label class="control-label">EMAIL</label>
                <input class="form-control" type="text" placeholder="Email">
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
            </div>
            <div class="form-group mt-3">
                <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
            </div>
        </form>
    </div>
</section>
@endsection
