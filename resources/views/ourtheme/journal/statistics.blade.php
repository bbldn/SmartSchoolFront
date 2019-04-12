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

<!-- tmp -->
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
                    <a class="nav-link" href="{{ route('journal.schedule') }}">
                        <img src="{{ asset('/themes/ourtheme/journal/img/yspevLogo.png') }}" alt="">
                        <span>УСПЕВАЕМОСТЬ</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('journal.statistics') }}">
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
        <div class="mainTabl">
            <p class="text-center">ОБЩАЯ ТАБЛИЦА</p>

            <div class="mainTablWrapper">
                <div class="firstDIVTMP">
                    <div class="form-group classSelect">
                        <label for="sel1">Класс:</label>
                        <select class="form-control" id="sel1">
                            <option>Текущий</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="form-group semestrSelect">
                        <label for="sel1">Семестр:</label>
                        <select class="form-control" id="sel1">
                            <option>Текущий</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                <div class="secondDIVTMP">
                    <table class="tAverBall">
                        <thead>
                        <tr>
                            <th scope="col">Предмет</th>
                            <th scope="col">Преподаватель</th>
                            <th scope="col">Тек.ср.балл</th>
                            <th scope="col">Статус</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-label="Предмет">Физика</td>
                            <td data-label="Преподаватель">Вронская Е.А.</td>
                            <td data-label="Тек.ср.балл">4.8</td>
                            <td data-label="Статус">Норма</td>
                        </tr>
                        <tr>
                            <td data-label="Предмет">Математика</td>
                            <td data-label="Преподаватель">Кадубина Г.В.</td>
                            <td data-label="Тек.ср.балл">3.75</td>
                            <td data-label="Статус">Подтянуть</td>
                        </tr>
                        <tr>
                            <td data-label="Предмет">Труд</td>
                            <td data-label="Преподаватель">Проничев А.Б.</td>
                            <td data-label="Тек.ср.балл">5</td>
                            <td data-label="Статус">Норма</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="detailTabl">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="form-group predmSelect">
                            <label for="sel3">Выберите предмет:</label>
                            <select class="form-control" id="sel3">
                                <option>Математика</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                        <p>ПОДРОБНАЯ ТАБЛИЦА</p>
                    </div>
                </div>
            </div>
            <table class="tAllMarksForPr">
                <thead>
                <tr>
                    <th scope="col" class="k_1">№</th>
                    <th scope="col" class="k_2">Дата</th>
                    <th scope="col" class="k_3">Оценка</th>
                    <th scope="col" class="k_4">Тип Оценки</th>
                    <th scope="col" class="k_5">Примечание</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td data-label="№">1</td>
                    <td data-label="Дата">11.03.19</td>
                    <td data-label="Оценка">5</td>
                    <td data-label="Тип Оценки">ДЗ</td>
                    <td data-label="Примечание">Отличное доказательство</td>
                </tr>
                <tr>
                    <td data-label="№">2</td>
                    <td data-label="Дата">12.03.19</td>
                    <td data-label="Оценка">3</td>
                    <td data-label="Тип Оценки">КР</td>
                    <td data-label="Примечание">Не помнит теорему Пифагора</td>
                </tr>
                <tr>
                    <td data-label="№">3</td>
                    <td data-label="Дата">12.03.19</td>
                    <td data-label="Оценка">5</td>
                    <td data-label="Тип Оценки">Работа на уроке</td>
                    <td data-label="Примечание">Зато помнит Виетта</td>
                </tr>
                </tbody>
            </table>

        </div>

    </main>
</div>


</body>

</html>
