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
                  <li><a href="#">Запросить новый</a></li>
                  <li><a href="#">Заблокировать UID</a></li>
                  <li><a href="#">Разблокировать UID</a></li>
                </ul>
              </li>
              <li>
                <div class="link">
                    <i class="fa fa-code"></i>Составить отчет о посещении<i class="fa fa-chevron-down"></i>
                </div>
                <ul class="submenu">
                    <li>
                        <div class="form-group">
                            <label class="labelNorm">С какой даты</label>
                            <input type="date" name="bday" max="3000-12-31" 
                            min="1000-01-01" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="labelNorm">По какую дату</label>
                            <input type="date" name="bday" min="1000-01-01"
                            max="3000-12-31" class="form-control">
                        </div>
                            <div class="form-group">
                                <input type="button" class="btn btn-primary" value="Сформировать">
                            </div>
                    </li>
            <!--                      <li><a href="#">Javascript</a></li>
            <li><a href="#">jQuery</a></li>
            <li><a href="#">Ruby</a></li> -->
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
                        <form class="form" method="post" action="{{url()->full()}}">
                            @csrf
                            <div class="form-group jcS">
                                <input type="date" name="date" min="1000-01-01" max="3000-12-31"
                                       value="{{$currentDate}}" class="form-control">
                                <div class="separator"></div>
                                <input type="submit" value="Просмотр" class="form-control btn btn-primary">
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <p>Проходы за {{$currentDate}}</p>
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

    </section>
@endsection
