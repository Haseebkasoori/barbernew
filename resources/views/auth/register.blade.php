@extends('layouts.app')

@section('content')
<!--<div class="container-fluid">-->
<!--    <div class="row justify-content-center">-->
<!--        <div class="col-md-8">-->
<!--            <div class="card">-->

<!--                <div class="card-header">{{ __('Register') }}</div>-->
<span class="logo-box">
        <img src="{{ $frontThemeSettings->logo_url }}" alt="logo">
    </span>
     <h4 class="mb-30">Sign up to New Account</h4>
                <div class="">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        <div class="input-group">
                            <i class="fa fa-user"></i>
                            <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Enter Name" required autofocus>
                            <!--<label for="email">@lang('app.email')</label>-->
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group">
                            <i class="fa fa-envelope"></i>
                            <input type="text" name="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Enter Email" required >
                            <!--<label for="email">@lang('app.email')</label>-->
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group">
                            <i class="fa fa-lock"></i>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required >
                            <!--<label for="email">@lang('app.email')</label>-->
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group">
                            <i class="fa fa-lock"></i>
                            <input type="password" name="password_confirmation" id="password-confirm" class="form-control"  placeholder="Enter Confirm Password" required >
                            <!--<label for="email">@lang('app.email')</label>-->
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <!--<div class="form-group row">-->
                        <!--    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>-->

                        <!--    <div class="col-md-6">-->
                        <!--        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>-->

                        <!--        @if ($errors->has('name'))-->
                        <!--            <span class="invalid-feedback" role="alert">-->
                        <!--                <strong>{{ $errors->first('name') }}</strong>-->
                        <!--            </span>-->
                        <!--        @endif-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="form-group row">-->
                        <!--    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->

                        <!--    <div class="col-md-6">-->
                        <!--        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>-->

                        <!--        @if ($errors->has('email'))-->
                        <!--            <span class="invalid-feedback" role="alert">-->
                        <!--                <strong>{{ $errors->first('email') }}</strong>-->
                        <!--            </span>-->
                        <!--        @endif-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="form-group row">-->
                        <!--    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->

                        <!--    <div class="col-md-6">-->
                        <!--        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>-->

                        <!--        @if ($errors->has('password'))-->
                        <!--            <span class="invalid-feedback" role="alert">-->
                        <!--                <strong>{{ $errors->first('password') }}</strong>-->
                        <!--            </span>-->
                        <!--        @endif-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="form-group row">-->
                        <!--    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>-->

                        <!--    <div class="col-md-6">-->
                        <!--        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="form-group row mb-0">
                            <div class="col-md-12 float-right">
                                <button type="submit" class="btn btn-custom btn-blue">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="float-right">
                        <a href="/login" >Already Have Account?</a>
                    </div>
                </div>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
@endsection
