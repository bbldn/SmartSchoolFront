<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Кабинет родителя: {{ config('app.name', 'Laravel') }}</title>

    <script type="text/javascript" src="{{asset('/themes/ourtheme/cabinet/js/jquery-3.1.0.js')}}"></script>
    <script type="text/javascript" src="{{asset('/themes/ourtheme/cabinet/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/themes/ourtheme/cabinet/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/themes/ourtheme/cabinet/css/parentLK.css')}}">
</head>

<body>
<header>
    <div class="container-fluid h-100">
        <div class="row h-100 header-row float-right">
            <a href="{{route('index')}}" style="margin-top: 1px;">Личный кабинет родителя:</a>
            <a href="{{route('settings')}}">
                <img style="width: 15px; height: 15px;" src="{{asset('/themes/ourtheme/cabinet/img/settingsLogo.png')}}">
            </a>
            <h5 class="mt-1">{{"${parent['surname']} ${parent['name']} ${parent['patronymic']}"}}</h5>
            <a style="margin-top: 1px;" href="{{route('logout')}}">Выход &nbsp</a>
        </div>
    </div>
</header>


<section>
    <div class="container-fluid">
        <div class="row child header-row align-items-center">
            <li class="text-white">Ваши дети:</li>
            <ul>
                @foreach($parent['children'] as $child)
                    <li class="col-1">
                        <a href="{{route('child', ['id' => $child['id']])}}">{{"${child['surname']} ${child['name']}"}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

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
