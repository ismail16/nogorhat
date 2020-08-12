@extends('frontend/layouts/master')
@section('title','Login')
@section('content')
<div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-6 bg-light ftco-animate m-3 p-4">
            <div class="form-group">
                <h4 class="text-dark">Login</h4>
                <hr class="p-0 m-0">
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf                    <div class="form-group">
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
    </div>
</div>
@endsection
