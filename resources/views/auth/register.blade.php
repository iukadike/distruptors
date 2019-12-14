@extends('layouts.app')

@section('content')
<div class="card">
    <div class="body">
        @include('errors')
        <form id="sign_in" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="msg">{{ __('Register') }}</div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">person</i>
                </span>
                <div class="form-line">
                    <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required autofocus>
                    @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">person</i>
                </span>
                <div class="form-line">
                    <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" value="{{ old('middle_name') }}" required autofocus>
                    @if ($errors->has('middle_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">person</i>
                </span>
                <div class="form-line">
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required autofocus>
                    @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
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
                    <i class="material-icons">person</i>
                </span>
                <div class="form-line">
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required autofocus>
                    @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">person</i>
                </span>
                <div class="form-line">
                    <input type="text" class="form-control" name="address" placeholder="Address" value="{{ old('address') }}" required autofocus>
                    @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">person</i>
                </span>
                <div class="form-line">
                    <select class="form-control show-tick" name="mode_of_id">
                        <option value="">-- Please select Mode of ID --</option>
                        @foreach ($mode_ids as $mode_id)
                            <option value="{{ $mode_id->id }}">{{ $mode_id->mode_of_id }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('mode_of_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mode_of_id') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">person</i>
                </span>
                <div class="form-line">
                    <input type="text" class="form-control" name="id_no" placeholder="Identification Number" value="{{ old('id_no') }}" required autofocus>
                    @if ($errors->has('id_no'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_no') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">person</i>
                </span>
                <div class="form-line">
                    <select class="form-control show-tick" name="role">
                        <option value="">-- Please select Role --</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->role }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('role'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('role') }}</strong>
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
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">lock</i>
                </span>
                <div class="form-line">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
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
                    <button class="btn btn-block bg-blue waves-effect" type="submit">{{ __('Register') }}</button>
                </div>
            </div>
            <div class="row m-t-15 m-b--20">
                <div class="col-xs-6">
                    <a href="{{ route('login') }}">Login</a>
                </div>
                <div class="col-xs-6 align-right">
                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
