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
            <img src="{{ asset('/themes/ourtheme/journal/img/logoSmartSchool.png') }}" alt="">
        </div>
        <div class="fioAndProfile mr-4">
            <span class="font-weight-bold">Петренко И.И.</span>
            <img src="{{ asset('/themes/ourtheme/journal/img/profileLogo.png') }}" alt="">
        </div>
    </div>
</header>

<div class="borderWrapper">

    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item curNavItem">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('journal.notes') }}">
                        <img src="{{ asset('/themes/ourtheme/journal/img/zametkiLogo.png') }}" alt="">
                        <span>ЗАМЕТКИ</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="dayWrapper">
            <div class="text-center day">
                <p>Понедельник 11.03.19</p>
            </div>
            <table class="tCurWeek">
                <thead>
                <tr>
                    <th scope="col" class="c_1">№</th>
                    <th scope="col" class="c_2">Начало</th>
                    <th scope="col" class="c_3">Окончание</th>
                    <th scope="col" class="c_4">Предмет</th>
                    <th scope="col" class="c_5">Аудитория</th>
                    <th scope="col" class="c_6">Задание</th>
                    <th scope="col" class="c_7">Оценки</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td data-label="№">1</td>
                    <td data-label="Начало">8:00</td>
                    <td data-label="Окончание">8:45</td>
                    <td data-label="Предмет">Физ-ра</td>
                    <td data-label="Аудитория">Спорт. зал</td>
                    <td data-label="Задание">Взять переодежку</td>
                    <td data-label="Оценки"><i class="fas fa-book-open"></i></td>
                </tr>
                <tr>
                    <td scope="row" data-label="№">2</td>
                    <td data-label="Начало">9:00</td>
                    <td data-label="Окончание">9:45</td>
                    <td data-label="Предмет">Математика</td>
                    <td data-label="Аудитория">212</td>
                    <td data-label="Задание">Упр №404</td>
                    <td data-label="Оценки"><i class="fas fa-book-open"></i></td>
                </tr>
                <tr>
                    <td scope="row" data-label="№">3</td>
                    <td data-label="Начало">10:00</td>
                    <td data-label="Окончание">10:45</td>
                    <td data-label="Предмет">Русс.яз</td>
                    <td data-label="Аудитория">123</td>
                    <td data-label="Задание">Реферат на тему "Мой дом - моя крепость"</td>
                    <td data-label="Оценки"><i class="fas fa-book-open"></i></td>
                </tr>
                <tr>
                    <td scope="row" data-label="№">4</td>
                    <td data-label="Начало">11:00</td>
                    <td data-label="Окончание">11:45</td>
                    <td data-label="Предмет">Труд</td>
                    <td data-label="Аудитория">765</td>
                    <td data-label="Задание">Принести фанеру</td>
                    <td data-label="Оценки"><i class="fas fa-book-open"></i></td>
                </tr>
                </tbody>
            </table>
        </div>


        <div class="dayWrapper">
            <div class="col text-center day">
                <p>Вторник 12.03.19</p>
            </div>
            <table class="tCurWeek">
                <thead>
                <tr>
                    <th scope="col" class="c_1">№</th>
                    <th scope="col" class="c_2">Начало</th>
                    <th scope="col" class="c_3">Окончание</th>
                    <th scope="col" class="c_4">Предмет</th>
                    <th scope="col" class="c_5">Аудитория</th>
                    <th scope="col" class="c_6">Задание</th>
                    <th scope="col" class="c_7">Оценки</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td data-label="№">1</td>
                    <td data-label="Начало">8:00</td>
                    <td data-label="Окончание">8:45</td>
                    <td data-label="Предмет">Физ-ра</td>
                    <td data-label="Аудитория">Спорт. зал</td>
                    <td data-label="Задание">Взять переодежку</td>
                    <td data-label="Оценки"><i class="fas fa-book-open"></i></td>
                </tr>
                <tr>
                    <td scope="row" data-label="№">2</td>
                    <td data-label="Начало">9:00</td>
                    <td data-label="Окончание">9:45</td>
                    <td data-label="Предмет">Математика</td>
                    <td data-label="Аудитория">212</td>
                    <td data-label="Задание">Упр №404</td>
                    <td data-label="Оценки"><i class="fas fa-book-open"></i></td>
                </tr>
                <tr>
                    <td scope="row" data-label="№">3</td>
                    <td data-label="Начало">10:00</td>
                    <td data-label="Окончание">10:45</td>
                    <td data-label="Предмет">Русс.яз</td>
                    <td data-label="Аудитория">123</td>
                    <td data-label="Задание">Реферат на тему "Мой дом - моя крепость"</td>
                    <td data-label="Оценки"><i class="fas fa-book-open"></i></td>
                </tr>
                <tr>
                    <td scope="row" data-label="№">4</td>
                    <td data-label="Начало">11:00</td>
                    <td data-label="Окончание">11:45</td>
                    <td data-label="Предмет">Труд</td>
                    <td data-label="Аудитория">765</td>
                    <td data-label="Задание">Принести фанеру</td>
                    <td data-label="Оценки"><i class="fas fa-book-open"></i></td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>

</div>

</body>

</html>
