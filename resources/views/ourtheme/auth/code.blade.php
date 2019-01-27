@extends('auth.login_base')

@section('content')
    <div class="row col-12 justify-content-center pb-2">
        <a href="http://xn--80aamwfdhffyx7d0e.xn--p1ai/"><img
                src="{{asset("themes/ourtheme/sign/img/logoSmartSchool.png")}}"></a>
    </div>

    <form action="{{ route('code') }}" method="POST" id="autoAndRegForm">
        @csrf
        <div class="row justify-content-sm-center">
            <div class="form-group col-12">
                <label for="idLogin" class="font-weight-bold">{{ __('Код из СМС') }}</label>
                <input type="text" id="idLogin" class="form-control{{ $errors->has('sms_code') ? ' is-invalid' : '' }}"
                       name="sms_code" placeholder="XXXXX" required>
                @if ($errors->has('sms_code'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('sms_code') }}</strong>
                </span>
                @endif
            </div>
        </div>


        <div class="row col-12 justify-content-center">
            <span class="p-1 pb-2"></span>
        </div>

        <div class="row justify-content-center">
            <div class="form-group col-8">
                <button type="submit" class="btn btn-primary w-100"> {{ __('Войти') }}</button>
            </div>
        </div>
        <a href="{{route('back')}}">Назад</a>

        @if ($errors->has('error'))
            <div class="row justify-content-center">
                <span class="text-danger" role="alert">
                    <strong>{{ $errors->first('error') }}</strong>
                </span>
            </div>
        @endif
    </form>
@endsection
