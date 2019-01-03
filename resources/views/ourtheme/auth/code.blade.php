@extends('auth.login_base')

@section('content')
    <div class="row col-12 justify-content-center pb-2">
        <img src="themes/ourtheme/sign/img/logoSmartSchool.png">
    </div>

    <form action="{{ route('code') }}" method="POST" id="autoAndRegForm">
        @csrf
        <div class="row justify-content-sm-center">
            <div class="form-group col-12">
                <label for="idLogin" class="font-weight-bold">{{ __('Код из СМС') }}</label>
                <input type="text" id="idLogin" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}"
                       name="code" placeholder="XXXXX" required>
                @if ($errors->has('code'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('code') }}</strong>
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
    </form>
@endsection
