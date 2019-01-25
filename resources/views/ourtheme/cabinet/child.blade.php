@extends('cabinet.cabinet_base')

@section('content')
    <section class="container-fluid mainWrapper">

        <div class="row col-12 col-md-3 noM p-0 cl1">

            <div class="container-fluid">
                <div class="row col-12 noM">
                    <ul id="accordion" class="accordion">
                        <li>
                            <div class="link">
                                <i class="fa fa-database"></i>Управление UID<i class="fa fa-chevron-down"></i>
                            </div>
                            <ul class="submenu">
                                <li><a class="show_popup" rel="popup1" href="#">Запросить новый</a></li>
                                <li><a class="show_popup" rel="popup2" href="#">Заблокировать UID</a></li>
                                <li><a class="show_popup" rel="popup3" href="#">Разблокировать UID</a></li>
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
                                            <label class="labelNorm">С какой даты</label>
                                            <input type="date" name="startDate" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="labelNorm">По какую дату</label>
                                            <input type="date" name="finishDate" class="form-control" required>
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
                    <h4>Информация по ребёнку: {{$child['surname']}} {{$child['name']}}</h4>
                </div>

                <div class="row">
                    <img src="/themes/ourtheme/cabinet/img/{{$child['id']}}.jpg" class="childPhoto" alt="">
                </div>

                <div class="row">
                    <p>Учебное заведение: {{$child['school']['name']}}</p>
                </div>

                <div class="row">
                    <p>Класс: 5-А</p>
                </div>

                <div class="row">
                    <p>Текущий
                        статус: {{ $child['status'] }}</p>
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
