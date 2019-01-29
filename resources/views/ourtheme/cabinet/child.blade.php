@extends('cabinet.cabinet_base')

@section('content')
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
            <form method="POST" id="formLockUID">
                @csrf
                <p class="mb-2 text-danger">Заблокировать UID</p>
                <p class="mb-2">для %ИМЯ РЕБЕНКА%</p>
                <p>Примечание: </p>
                <p><textarea rows="3" cols="30" name="message"></textarea></p>
                <input type="hidden" name="child_id" value="{{$child['id']}}">
                <input type="submit" id="okPP2" class="btn btn-primary" value="Да">
                <input type="button" class="closePP btn btn-primary" value="Отмена">
            </form>
        </div>
    </div>

    <div class="popup" id="popup3">
        <div class="object">
            <form method="POST" id="formUnlockUID">
                @csrf
                <p class="mb-2 text-success">Разблокировать UID</p>
                <p class="mb-2">для %ИМЯ РЕБЕНКА%</p>
                <p>Примечание: </p>
                <p><textarea rows="3" cols="30" name="message"></textarea></p>
                <input type="hidden" name="child_id" value="{{$child['id']}}">
                <input type="submit" id="okPP3" class="btn btn-primary" value="Да">
                <input type="button" class="closePP btn btn-primary" value="Отмена">
            </form>
        </div>
    </div>

    <section class="container-fluid mainWrapper">

        <div class="row col-12 col-md-3 noM p-0 cl1">

            <div class="container-fluid">
                <div class="row col-12 noM">
                    <ul id="accordion" class="accordion">
                        <li>
                            <div class="link">
                                <i class="fa fa-database"></i>Управление пропусками<i class="fa fa-chevron-down"></i>
                            </div>
                            <ul class="submenu">
                                {{--<li><a class="show_popup" rel="popup1" href="#">Запросить новый</a></li>--}}
                                @if($child['key']['state'] == 1)
                                    <li>
                                        <a class="show_popup" rel="popup2" href="#" id="lockLink">
                                            Заблокировать пропуск
                                        </a>
                                    </li>
                                    <li>
                                        <a class="show_popup" rel="popup3" href="#" id="unlockLink"
                                           style="display: none;">
                                            Разблокировать пропуск
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a class="show_popup" rel="popup2" href="#" id="lockLink"
                                           style="display: none;">
                                            Заблокировать пропуск
                                        </a>
                                    </li>
                                    <li>
                                        <a class="show_popup" rel="popup3" href="#" id="unlockLink">
                                            Разблокировать пропуск
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                        <li>
                            <div class="link">
                                <i class="fa fa-code"></i>Составить отчет о посещении<i class="fa fa-chevron-down"></i>
                            </div>
                            <ul class="submenu">
                                <li>
                                    <form method="POST" target="_blank" action="{{route('report')}}" id="reportForm">
                                        @csrf
                                        <input type="hidden" name="child_id" value="{{$child['id']}}">
                                        <div class="form-group">
                                            <label class="labelNorm">Начальная дата</label>
                                            <input type="date" name="й startDate" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="labelNorm">Конечная дата</label>
                                            <input type="date" name="finishDate" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" value="yes" class="custom-control-input"
                                                       name="save" id="saveCheckbox">
                                                <label class="custom-control-label" for="saveCheckbox">Сохранить</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input class="btn btn-primary" type="submit" value="Сформировать">
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>


        </div>

        <div class="row col-12 col-md-9 noM cl2">
            <div class="container-fluid">
                <div class="row">
                    <h4>Информация по ребёнку:</h4>
                </div>

                <div class="row">
                    <img src="/themes/ourtheme/cabinet/img/{{$child['id']}}.jpg" class="childPhoto" alt="">
                </div>

                <div class="row">
                    <p>ФИО: {{$child['surname'] . " " . $child['name'] . " " . $child['patronymic']}}</p>
                </div>

                <div class="row">
                    <p>
                        Номер пропуска: {{$child['key']['short_codekey']}},
                        <strong id="UIDStatus"
                              class="{{($child['key']['state'] == 0) ? 'text-danger': 'text-success'}}">({{$child['key']['stateText']}})
                        </strong>
                    </p>
                </div>

                <div class="row">
                    <p>Учебное заведение: {{$child['school']['name']}}</p>
                </div>

                <div class="row">
                    <p>Класс: 5-А</p>
                </div>

                <div class="row">
                    <p>Текущий статус учащегося: {{ $child['status'] }}</p>
                </div>

                <div class="row">
                    {{--<form class="form" method="post" action="{{url()->full()}}">--}}
                    <form class="form" method="POST" id="dateForm">
                        @csrf
                        <div class="form-group jcS">
                            <input name="child_id" type="hidden" value="{{ $child['id'] }}">
                            <input type="date" name="date" min="1000-01-01" max="3000-12-31"
                                   value="{{ $currentDate }}" class="form-control">
                            <div class="separator"></div>
                            <input type="submit" value="Просмотр" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>

                <div class="row">
                    <p>Проходы за <span id="accessDataIndicator">{{ $currentDate }}</span></p>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Время</th>
                            <th scope="col">Направление</th>
                        </tr>
                        </thead>
                        <tbody id="accessBody">
                        @foreach($child['access'] as $access)
                            <tr>
                                <th scope="row" class="p-1">{{$access['number']}}</th>
                                <td class="p-1">{{$access['time']}}</td>
                                <td class="p-1">{{$access['direction_word']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
@endsection
