@extends('cabinet.cabinet_base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>
                Дополнительные родители (представителя)
            </h1>
        </div>

        <div class="row justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th>Телефон</th>
                    <th>ФИО</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($parent['additional_parents'] as $aparent)
                    <tr>
                        <td>{{ $aparent['user']['phone'] }}</td>
                        <td>{{ $aparent['surname'] . " " . $aparent['name'] . " " . $aparent['patronymic'] }}</td>
                        <td>
                            <a href="#">Редактировать</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('additional-parents-add') }}" class="btn btn-primary">Добавить</a>
        </div>


    </div>


@endsection
