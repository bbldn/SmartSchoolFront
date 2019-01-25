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
    <script type="text/javascript" src="{{asset('/themes/ourtheme/cabinet/js/popup.js')}}"></script>

    <link rel="stylesheet" type="text/css"
          href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/normalize.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/navbar.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/lkParent.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/mainStyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/valeraVersionCss/popup.css')}}">

</head>

<body>

<header>
    <div class="container-fluid h-100">
        <div class="row row-header h-100">

            <div class="col-7 h-100 col-WithLogo">
                <a href="{{route('index')}}" class="w-100"><img src="/themes/ourtheme/cabinet/img/logoSmartSchool.png"
                                                                class="logMLeft"></a>
            </div>

            <div class="col-3 h-100 col-flex">
                <div class="wrapperLK">
                    <a href="#" class="text-white">
                        <p>{{"${parent['surname']} ${parent['name']} ${parent['patronymic']}"}}</p></a>
                    <img src="img/user.png" class="logo pl-1" alt="">
                    <a href="{{route('settings')}}">
                        <img style="width: 15px; height: 15px;"
                             src="{{asset('/themes/ourtheme/cabinet/img/settingsLogo.png')}}">
                    </a>
                </div>
            </div>

            <div class="col-2 h-100 cfCenter">
                <div class="wrapperLK">
                    <a href="{{route('logout')}}"><p class="exitWhite">Выход</p></a>
                </div>
            </div>

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
                    @foreach($parent['children'] as $child)
                        <li class="nav-item">
                            <a class="nav-link flowing-scroll"
                               href="{{route('child', ['id' => $child['id']])}}">{{"${child['surname']} ${child['name']}"}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="row messageRow">
</div>

<div class="overlay_popup"></div>

<div class="popup" id="popup1">
    <div class="object">
        <form action="" method="">
            <p class="mb-2 text-primary">Запросить новый ID</p>
            <p class="mb-2">для
                %ИМЯ РЕБЕНКА%
            </p>
            <p>Примечание: </p>
            <p><textarea rows="3" cols="30" name="message"></textarea></p>
            <input type="submit" id="okPP1" class="btn btn-primary" value="Да">
            <input type="button" class="closePP btn btn-primary" value="Отмена">
        </form>
    </div>
</div>

<div class="popup" id="popup2">
    <div class="object">
        <form action="" method="">
            <p class="mb-2 text-danger">Заблокировать UID</p>
            <p class="mb-2">для %ИМЯ РЕБЕНКА%</p>
            <p>Примечание: </p>
            <p><textarea rows="3" cols="30" name="message"></textarea></p>
            <input type="submit" id="okPP2" class="btn btn-primary" value="Да">
            <input type="button" class="closePP btn btn-primary" value="Отмена">
        </form>
    </div>
</div>

<div class="popup" id="popup3">
    <div class="object">
        <form action="" method="">
            <p class="mb-2 text-success">Разблокировать UID</p>
            <p class="mb-2">для %ИМЯ РЕБЕНКА%</p>
            <p>Примечание: </p>
            <p><textarea rows="3" cols="30" name="message"></textarea></p>
            <input type="submit" id="okPP3" class="btn btn-primary" value="Да">
            <input type="button" class="closePP btn btn-primary" value="Отмена">
        </form>
    </div>
</div>

<div class="all-wrapper">
    @yield('content')
</div>

</body>
</html>
