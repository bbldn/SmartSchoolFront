<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Кабинет родителя: {{ config('app.name', 'Laravel') }}</title>

    <script type="text/javascript" src="{{asset('/themes/ourtheme/cabinet/js/jQuery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/themes/ourtheme/cabinet/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/themes/ourtheme/cabinet/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/themes/ourtheme/cabinet/js/accordionLK.js')}}"></script>

    {{-- <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/bootstrap.min.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/style.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/parentLK.css')}}"> --}}

    <link rel="stylesheet" href="text/css" href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/lkParent.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/mainStyle.css')}}">

</head>

<body>

<!-- привет Боря -->
<header>
    <div class="container-fluid h-100">
        <div class="row row-header h-100">

                <div class="col-7 h-100 col-WithLogo">
                    <a href="{{route('index')}}" class="w-100"><img src="/themes/ourtheme/cabinet/img/logoSmartSchool.png" class="logMLeft"></a>
                </div>
                
                <div class="col-3 h-100 col-flex">
                    <div class="wrapperLK">
                        <a href="#" class="text-white"><p>{{"${parent['surname']} ${parent['name']} ${parent['patronymic']}"}}</p></a>
                        <img src="img/user.png" class="logo pl-1" alt="">
                        <a href="{{route('settings')}}">
                            <img style="width: 15px; height: 15px;" src="{{asset('/themes/ourtheme/cabinet/img/settingsLogo.png')}}">
                        </a>
                    </div>
                </div>

                <div class="col-2 h-100 cfCenter">
                    <div class="wrapperLK">
                        <a href="{{route('logout')}}"><p class="exitWhite">Выход</p></a>
                    </div>
                </div>

           {{-- <a href="{{route('index')}}" style="margin-top: 1px;">Личный кабинет родителя:</a>--}}
           {{-- <a href="{{route('settings')}}">--}}
           {{--     <img style="width: 15px; height: 15px;" src="{{asset('/themes/ourtheme/cabinet/img/settingsLogo.png')}}">--}}
           {{-- </a>--}}
           {{-- <h5 class="mt-1">{{"${parent['surname']} ${parent['name']} ${parent['patronymic']}"}}</h5>--}}
           {{-- <a style="margin-top: 1px;" href="{{route('logout')}}">Выход &nbsp</a>--}}

        </div>
    </div>
</header>


        <div class="container-fluid sticky-top my-menu">
        <div class="row navbarRow align-items-center text-center">

            <nav class="col-12 navbar navbar-expand-md">

                 <a class="navbar-brand" href="">
                    <p>Ваши дети:</p>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon bg-white"></span>
                </button>

              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav justify-content-start">
                    @foreach($parent['children'] as $child)
                  <li class="nav-item">
                    <a class="nav-link flowing-scroll" href="{{route('child', ['id' => $child['id']])}}">{{"${child['surname']} ${child['name']}"}}</a>
                  </li>
                        @endforeach       
                </ul>
              </div>
            </nav>
        </div>
    </div>


{{--<section>--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row child header-row align-items-center">--}}
{{--            <li class="text-white">Ваши дети:</li>--}}
{{--            <ul>--}}
{{--                @foreach($parent['children'] as $child)--}}
{{--                    <li class="col-1">--}}
{{--                        <a href="{{route('child', ['id' => $child['id']])}}">{{"${child['surname']} ${child['name']}"}}</a>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


<div class="all-wrapper">
    @yield('content')
</div>

<!--
<footer>
    <div class="container-fluid h-100">
        <div class="row h-100">

            <div class="col-4">
                <div class="container-fluid">
                    <div class="row">
                        <p>По всем вопросам обращаться:</p>
                    </div>

                    <div class="row">
                        <p>По телефону: 115 (звонок бесплатный)</p>
                    </div>

                    <div class="row">
                        <p>На e-mail: info@умнаяшколаднр.рф</p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="container-fluid h-75">
                    <div class="row justify-content-center h-100 align-items-end">
                        {{--Все права защищены 2018--}}
    </div>
</div>
</div>

<div class="col-4">
<div class="container-fluid h-75">
    <div class="row justify-content-start h-100 align-items-end">
{{--vk int facebook--}}
    </div>
</div>
</div>

</div>
</div>
</footer>
-->
</body>
</html>
