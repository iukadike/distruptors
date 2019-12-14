@extends('layouts.app')

@section('content')
<div class="card">
    <div class="body">
        @include('errors')
        <form id="sign_in" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="msg">{{ __('Login') }}</div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">person</i>
                </span>
                <div class="form-line">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">lock</i>
                </span>
                <div class="form-line">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 p-t-5">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="filled-in chk-col-pink">
                    <label for="remember">{{ __('Remember Me') }}</label>
                </div>
                <div class="col-xs-4">
                    <button class="btn btn-block bg-pink waves-effect" type="submit">{{ __('Login') }}</button>
                </div>
            </div>
            <div class="row m-t-15 m-b--20">
                <div class="col-xs-6">
                    <a href="{{ route('register') }}">Register Now!</a>
                </div>
                <div class="col-xs-6 align-right">
                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
