@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Код из смс') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('code') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">{{ __('Код из СМС:') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                           class="form-control{{ $errors->has('sms_code') ? ' is-invalid' : '' }}"
                                           name="sms_code" required autofocus>

                                    @if ($errors->has('sms_code'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sms_code') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Войти') }}
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Прислать код ещё раз') }}
                                    </a>
                                </div>
                            </div>
                            @if ($errors->has('error'))
                                <div class="row justify-content-center">
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('error') }}</strong>
                                    </span>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
