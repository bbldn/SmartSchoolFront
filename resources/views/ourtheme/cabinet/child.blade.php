@extends('cabinet.cabinet_base')

@section('content')
    <div class="container-fluid justify-content-start">
        <div class="row">
            <div class="col-3">
                <ul id="accordion" class="accordion">
                    <li>
                        <div class="link"><i class="fa fa-database"></i>Управление UID<i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu">
                            <li><a href="#">Запросить новый</a></li>
                            <li><a href="#">Заблокировать UID</a></li>
                            <li><a href="#">Разблокировать UID</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">
                            <i class="fa fa-code"></i>Сформировать отчет о посещении<i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu">
                            <li>
                                <div class="form-group">
                                    <label class="labelNorm">С какой даты</label>
                                    <input type="date" name="start_date" max="3000-12-31"
                                           min="1000-01-01" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="labelNorm">По какую дату</label>
                                    <input type="date" name="finish_date" min="1000-01-01"
                                           max="3000-12-31" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="button" class="btn btn-primary" value="Сформировать">
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-9 p-4">
                <div class="container-fluid">
                    <div class="row">
                        <h4>Информация по ребёнку: {{$child['surname']}} {{$child['name']}}</h4>
                    </div>

                    <div class="row">
                        <img src="/themes/ourtheme/cabinet/img/{{$child['id']}}.jpg" alt="">
                    </div>

                    <div class="row w-50">
                        <p>Учебное заведение: {{$child['school']['name']}}</p>
                    </div>

                    <div class="row w-50">
                        <p>Класс: 10-Б</p>
                    </div>

                    <div class="row w-100">
                        <p>Текущий
                            статус: {{ $child['status'] }}</p>
                    </div>


                    <div class="row">
                        <form class="form" method="post" action="{{url()->full()}}">
                            @csrf
                            <div class="form-group" style="width: 350px;">
                                <input type="date" name="date" min="1000-01-01" max="3000-12-31"
                                       value="{{$currentDate}}" class="form-control">
                                <div style="width: 10px"></div>
                                <input type="submit" value="Просмотр" class="form-control">
                            </div>
                        </form>


                    </div>


                    <div class="row w-100">
                        <p style="color: black; font-size: 30px;">Проходы за {{$currentDate}}</p>
                        <table class="table table-hover">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Время</th>
                                <th scope="col">Направление</th>
                            </tr>
                            </thead>
                            <tbody>
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

        </div>

    </div>

@endsection
