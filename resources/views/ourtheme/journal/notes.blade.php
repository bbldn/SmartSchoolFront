<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Электронный дневник</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script type="text/javascript" src="{{ asset('/themes/ourtheme/journal/js/jQuery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/themes/ourtheme/journal/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/themes/ourtheme/journal/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/themes/ourtheme/journal/js/main.js') }}"></script>


    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/ourtheme/journal/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/ourtheme/journal/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/ourtheme/journal/css/style.css') }}">
</head>

<body>
<header>
    <div class="headerWrapper">
        <div class="logoWrapper">
            <a href="{{route('index')}}" class="w-100">
                <img src="{{ asset("/themes/ourtheme/cabinet/img/logoSmartSchool.png") }}">
            </a>
        </div>
        <div class="fioAndProfile mr-4">
            <span class="font-weight-bold">Петренко И.И.</span>
            <img src="{{ asset('/themes/ourtheme/journal/img/profileLogo.png') }}" alt="">
        </div>
    </div>
</header>

<!-- tmp -->
<div class="borderWrapper">

    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('journal.current.week') }}">
                        <img src="{{ asset('/themes/ourtheme/journal/img/tekNedLogo.png') }}" alt="">
                        <span>ТЕКУЩАЯ НЕДЕЛЯ</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('journal.statistics') }}">
                        <img src="{{ asset('/themes/ourtheme/journal/img/yspevLogo.png') }}" alt="">
                        <span>УСПЕВАЕМОСТЬ</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('journal.schedule') }}">
                        <img src="{{ asset('/themes/ourtheme/journal/img/raspLogo.png') }}" alt="">
                        <span>РАСПИСАНИЕ</span>
                    </a>
                </li>
                <li class="nav-item curNavItem">
                    <a class="nav-link" href="{{ route('journal.notes') }}">
                        <img src="{{ asset('/themes/ourtheme/journal/img/zametkiLogo.png') }}" alt="">
                        <span>ЗАМЕТКИ</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="zametkiWrapper">
            <div class="important">
                <p class="text-center">ВАЖНЫЕ:</p>
                <div class="zametka">
                    <p>Принести 200р. на ремонт окон до 05.04.19</p>
                </div>
                <div class="zametka">
                    <p>Юбилей класс.рука 22.05.2019</p>
                </div>
            </div>

            <div class="razdel">
                <img src="img/plusLogo.png" alt="">
            </div>

            <div class="not-important">
                <p class="text-center">ДОПОЛНИТЕЛЬНЫЕ:</p>
                <div class="zametka">
                    <p>Булочка в столовой подарожала на 3р.</p>
                </div>
            </div>

        </div>
    </main>
</div>


</body>

</html>
