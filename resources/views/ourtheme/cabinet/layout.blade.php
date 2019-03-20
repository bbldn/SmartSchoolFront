<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Кабинет родителя: {{ config('app.name', 'Laravel') }}</title>

    <script type="text/javascript" src="{{ asset('/themes/ourtheme/cabinet/js/jQuery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/themes/ourtheme/cabinet/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/themes/ourtheme/cabinet/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/themes/ourtheme/cabinet/js/accordionLK.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/themes/ourtheme/cabinet/js/popup.js') }}"></script>

    {{--<link rel="stylesheet" type="text/css"--}}
    {{--href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/normalize.css')}}">--}}
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/themes/ourtheme/cabinet/css/valeraVersionCss/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/themes/ourtheme/cabinet/css/valeraVersionCss/header.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/themes/ourtheme/cabinet/css/valeraVersionCss/navbar.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/themes/ourtheme/cabinet/css/valeraVersionCss/lkParent.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/themes/ourtheme/cabinet/css/valeraVersionCss/mainStyle.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/themes/ourtheme/cabinet/css/valeraVersionCss/popup.css') }}">
    @yield('links')

</head>

<body>

<header>
    <div class="container-fluid h-100">
        <div class="row row-header h-100">

            <div class="col-7 h-100 col-WithLogo">
                <a href="{{route('index')}}" class="w-100">
                    <img src="{{ asset("/themes/ourtheme/cabinet/img/logoSmartSchool.png") }}" class="logMLeft">
                </a>
            </div>

            <div class="col-3 h-100 col-flex">
                <div class="wrapperLK text-center">
                    <p class="dropdownmenu-title" id="dropdownmenu-title">{{ $parent['profile']['surname'] . " " . $parent['profile']['name'] }}</p>
                    {{--<a href="{{ route('actions') }}" class="text-white">{{ "${parent['surname']} ${parent['name']}" }}</a>--}}
                    <div class="dropdownmenu-wrapper" id="dropdownmenu-wrapper">
                        <a class="dropdownmenu-item d-block" href="{{ route('settings') }}">Управление уведомлениями</a>
                        <a class="dropdownmenu-item d-block" href="{{ route('additional-parents') }}">Представители (Родители)</a>
                        <a class="dropdownmenu-item d-block" href="{{ route('additional-parents-edit', ['id' => $parent['id']]) }}">Настройки</a>
                        <a class="dropdownmenu-item d-block" href="{{ route('logout') }}">Выход</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('header')


</body>
</html>
