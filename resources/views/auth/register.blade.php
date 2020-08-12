@extends('frontend/layouts/master')
{{--@extends('layouts.app')--}}

@section('content')
<div class="container">
    <div class="row m-4">
        <div class="col-md-4 bg-light p-4">
            <div class="form-group">
                <h4 class="text-dark">Login</h4>
                <hr class="p-0 m-0">
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label>Username or email <span>*</span></label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Passwords  <span>*</span></label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group row d-flex justify-content-end">
                    <div class="col-sm-12">
                        <div class="login_submit">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link float-right" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            @endif
                        </div>
                        <span class="">
                            Not yet register? Register First!  
                        </span><a href="{{ route('register') }}" class="btn-sm btn-outline-primary"> Register Now</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-8 bg-light p-4" style="box-shadow: -2px 1px 3px -2px black;">
            <div class="_card">
                <div class="form-group">
                    <h4 class="text-dark">Register</h4>
                    <hr class="p-0 m-0">
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <label class="mb-0">Name</label>
                                <div class="">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0">E-Mail Address</label>

                                <div class="">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                               <label class="mb-0">Phone Number</label>

                            <div class="">
                                <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="col-md-6">
                               <label class="mb-0">District</label>

                            <div class="">
                                <input id="district" type="text" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" value="{{ old('district') }}" required autofocus>

                                @if ($errors->has('district'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="col-md-6">
                               <label class="mb-0">Thana</label>

                            <div class="">
                                <input id="thana" type="text" class="form-control{{ $errors->has('thana') ? ' is-invalid' : '' }}" name="thana" value="{{ old('thana') }}" required autofocus>

                                @if ($errors->has('thana'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('thana') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="col-md-6">
                               <label class="mb-0">Address</label>

                            <div class="">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="col-md-6">
                               <label class="mb-0">Password</label>

                            <div class="">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0">Confirm Password</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            </div>
                        </div>
                        <input name="role" value="2" hidden>
                        <input name="status" value="1" hidden>
                        <div class="form-group mb-1 col-md-12">
                            <div class="float-right">
                                <div class="pt-2">
                                    <p class="">
                                        <input type="checkbox" name="agreement" class="form-controll-sm">
                                        I agree to the
                                        <a target="_blank" href="#" style="color:#D52379">terms and conditions</a>
                                    </p>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block"> Register </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
