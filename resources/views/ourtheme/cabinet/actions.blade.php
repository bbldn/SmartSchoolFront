@extends('cabinet.layout')

@section('header')
    <style>
        .row {
            margin-bottom: 5px;
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top: 5px;">
            <a class="btn btn-success" href="{{ route('settings') }}">Управление уведомлениями</a>
        </div>
        <div class="row justify-content-center">
            <a class="btn btn-success" href="{{ route('additional-parents') }}">Дополнительные представители</a>
        </div>
        <div class="row justify-content-center">
            <a class="btn btn-success" href="{{ route('logout') }}">Выход</a>
        </div>
    </div>
@endsection
