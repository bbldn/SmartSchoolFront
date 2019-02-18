@extends('cabinet.cabinet_base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>
                Дополнительные родители
                <a href="{{ route('additional-parents-add') }}" class="btn btn-primary">Добавить</a>
            </h1>
        </div>

        <div class="row justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th>Телефон</th>
                    <th>ФИО</th>
                </tr>
                </thead>
                <tbody>
                @foreach($parent['additional_parents'] as $aparent)
                    <tr>
                        <td>{{ $aparent['user']['phone'] }}</td>
                        <td>{{ $aparent['surname'] . " " . $aparent['name'] . " " . $aparent['patronymic'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>


@endsection
