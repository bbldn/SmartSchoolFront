@extends('cabinet.cabinet_base')

@section('links')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/themes/ourtheme/cabinet/css/valeraVersionCss/additional.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h3>
                Дополнительные родители (представителя)
            </h3>
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
                        <td>{{ $aparent['profile']['surname'] . " " . $aparent['profile']['name'] . " " . $aparent['profile']['patronymic'] }}</td>
                        <td>
                            <a href="{{ route('additional-parents-edit', ['id' => $aparent['id']]) }}">Редактировать</a>
                            <a href="{{ route('additional-parents-delete', ['id' => $aparent['id']]) }}">Удалить</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('additional-parents-add') }}" class="btn btn-primary">Добавить</a>
        </div>


    </div>


@endsection
