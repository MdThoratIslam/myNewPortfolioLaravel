@extends('backend.auth.index')
@section('title') Sign In @endsection
@section('auth_content')
    <div class="row justify-content-center">
                  <div class="col-lg-8 col-md-10">
                    <div class="card card-default mb-0">
                      <div class="card-header pb-0">
{{--                        <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">--}}
{{--                          <a class="w-auto pl-0" href="/index.html">--}}
{{--                            <img src="{{asset('backend')}}/images/portfolio-logo-transparent.png" alt="Mono">--}}
{{--                            <span class="brand-name text-dark">MONO</span>--}}
{{--                          </a>--}}
{{--                        </div>--}}
                      </div>
                      <div class="card-body px-5 pb-5 pt-0">
{{--                        <h4 class="text-dark mb-6 text-center">Sign in for free</h4>--}}
                          <form action="{{route('login')}}" method="POST">
                              @csrf
                              <div class="row">
                                  <div class="form-group col-md-12 mb-4">
                                      <input type="email" class="form-control input-lg {{ $errors->has('email') ? 'is-invalid border-danger' : '' }}" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                                      @if ($errors->has('email'))
                                          <div class="text-daborder-danger small mt-1 invalid-feedback">
                                              {{ $errors->first('email') }}
                                          </div>
                                      @endif
                                  </div>
                                  <div class="form-group col-md-12 ">
                                      <input type="password" class="form-control input-lg {{ $errors->has('password') ? 'is-invalid border-danger' : '' }}" id="password" placeholder="Password" name="password" required autocomplete="new-password">
                                      @if ($errors->has('password'))
                                          <div class="text-daborder-danger small mt-1 invalid-feedback">
                                              {{ $errors->first('password') }}
                                          </div>
                                      @endif
                                  </div>
                                  <div class="col-md-12 app-brand w-100 d-flex justify-content-end border-bottom-0">
                                      <button type="submit" class="btn btn-sm btn-primary btn-pill mb-4">Sign Up</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
@endsection

