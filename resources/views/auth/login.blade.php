@extends('frontend/layouts/master')
{{--@extends('layouts.app')--}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="account_form mt-2 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>login</h4>
                        </div>
                        <div class="card-body">
                            <div class="login_form login">
                                <form action="#">
                                    <div class="login_input">
                                        <label>Username or email <span>*</span></label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="login_input">
                                        <label>Passwords  <span>*</span></label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="login_submit">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
