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

    <link rel="stylesheet" type="text/css"
          href="{{ asset('/themes/ourtheme/cabinet/css/valeraVersionCss/settings.css') }}">

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
                    <p class="dropdownmenu-title" id="dropdownmenu-title">{{ "${parent['surname']} ${parent['name']} ${parent['patronymic']}" }}</p>
                    <div class="dropdownmenu-wrapper" id="dropdownmenu-wrapper">
                        <a class="dropdownmenu-item d-block" href="{{route('settings')}}">Управление уведомлениями</a>
                        <a class="dropdownmenu-item d-block" href="{{ route('additional-parents') }}">Дополнительные представители</a>
                        <a class="dropdownmenu-item d-block" href="{{ route('logout') }}">Выход</a>
                    </div>
                    {{--<a href="{{route('settings')}}">--}}
                        {{--<img style="width: 15px; height: 15px;"--}}
                             {{--src="{{ asset('/themes/ourtheme/cabinet/img/settingsLogo.png') }}">--}}
                    {{--</a>--}}
                </div>
            </div>

            {{--<div class="col-2 h-100 cfCenter">--}}
                {{--<div class="wrapperLK">--}}
                    {{--<a href="{{route('logout')}}"><p class="exitWhite">Выход</p></a>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
    </div>
</header>

<div class="container-fluid sticky-top my-menu">
    <div class="row navbarRow align-items-center text-center">
        <nav class="col-12 navbar navbar-light navbar-expand-md">
            <a class="navbar-brand" href="">
                <p>Ваши дети:</p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav justify-content-start">
                    @foreach($parent['children'] as $value)
                        <li class="nav-item">
                            <a class="nav-link flowing-scroll"
                               href="{{route('child', ['id' => $value['id']])}}">{{"${value['surname']} ${value['name']}"}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="row messageRow"></div>
<div class="overlay_popup"></div>

<div class="all-wrapper">
    @yield('content')
</div>

</body>
</html>
