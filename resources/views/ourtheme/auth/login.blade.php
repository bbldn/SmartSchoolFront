@extends('auth.login_base')

@section('content')
    <div class="row col-12 justify-content-center pb-2">
        <a href="http://xn--80aamwfdhffyx7d0e.xn--p1ai/">
            <img src="{{asset('/themes/ourtheme/sign/img/logoSmartSchool.png')}}" alt="Cайт умнаяшколаднр.рф">
        </a>
    </div>

    <form action="{{ route('login') }}" method="POST" id="autoAndRegForm">
        @csrf
        <div class="row justify-content-sm-center">
            <div class="form-group col-12">
                <label for="idLogin" class="font-weight-bold">{{ __('Телефон') }}</label>
                <input type="text" id="idLogin" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                       name="phone"
                       value="{{ is_array(old('phone')) && in_array(1, old('phone')) ? old('phone') : '38071' }}"
                       placeholder="38071XXXXXXX" required>
                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>

        </div>

        <div class="row justify-content-sm-center">
            <div class="form-group col-12">
                <label for="idPass" class="font-weight-bold">{{ __('Пароль') }}</label>
                <input type="password" id="idPass"
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                       placeholder="Пароль" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

        </div>

        <div class="row justify-content-sm-center">
            <div class="form-group col-md-6">
                <input type="checkbox" id="idRemember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="idRemember" class="form-check-label">{{ __('Запомнить меня') }}</label>
            </div>
            <div class="form-group col-md-6 text-right">
                {{--<a href="{{ route('password.request') }}">{{ __('Забыли пароль?') }}</a>--}}
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

        @if ($errors->has('error'))
            <div class="row justify-content-center">
                <span class="text-danger" role="alert">
                    <strong>{{ $errors->first('error') }}</strong>
                </span>
            </div>
        @endif
    </form>
@endsection
