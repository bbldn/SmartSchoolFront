<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Электронный дневник</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script type="text/javascript" src="{{ asset('/themes/ourtheme/journal/js/jQuery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/themes/ourtheme/journal/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/themes/ourtheme/journal/js/bootstrap.min.js') }}"></script>

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
                <li class="nav-item curNavItem">
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
        <div class="mainTabl">
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
            </div>
        </div>


        <div class="detailTabl">
            <table class="tAllMarksForPr">
                <thead>
                <tr>
                    <th scope="col" class="r_1">№</th>
                    <th scope="col" class="r_2">Понедельник</th>
                    <th scope="col" class="r_3">Вторник</th>
                    <th scope="col" class="r_4">Среда</th>
                    <th scope="col" class="r_5">Четверг</th>
                    <th scope="col" class="r_6">Пятница</th>
                    <th scope="col" class="r_7">Суббота</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td data-label="№">1</td>
                    <td data-label="Понедельник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Вторник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Среда">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Четверг">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Пятница">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Суббота">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td data-label="№">2</td>
                    <td data-label="Понедельник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Вторник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Среда">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Четверг">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Пятница">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Суббота">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td data-label="№">3</td>
                    <td data-label="Понедельник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Вторник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Среда">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Четверг">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Пятница">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Суббота">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td data-label="№">4</td>
                    <td data-label="Понедельник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Вторник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Среда">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Четверг">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Пятница">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Суббота">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td data-label="№">5</td>
                    <td data-label="Понедельник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Вторник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Среда">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Четверг">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Пятница">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Суббота">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td data-label="№">6</td>
                    <td data-label="Понедельник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Вторник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Среда">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Четверг">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Пятница">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Суббота">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td data-label="№">7</td>
                    <td data-label="Понедельник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Вторник">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Среда">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Четверг">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Пятница">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                    <td data-label="Суббота">
                        <div class="lessonInRasp">
                            <p class="lesInR1">Математика</p>
                            <p class="lesInR2">Петрова Ю.Т.</p>
                            <p class="lesInR3">каб: 112</p>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </main>

</div>


</body>

</html>
