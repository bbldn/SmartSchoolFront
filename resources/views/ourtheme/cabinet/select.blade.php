{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<meta charset="UTF-8">--}}
{{--<title>{{ env('APP_NAME', 'Умная Школа ДНР') }}</title>--}}
{{--<link rel="stylesheet" href="{{ asset('/themes/ourtheme/cabinet/css/normalize.css') }}">--}}
{{--<link rel="stylesheet" href="{{ asset('/themes/ourtheme/cabinet/css/bootstrap.min.css') }}">--}}
{{--<link rel="stylesheet" href="{{ asset('/themes/ourtheme/cabinet/css/selectBlock.css') }}">--}}

{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"--}}
{{--integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">--}}

{{--<script type="text/javascript" src="{{ asset('/themes/ourtheme/cabinet/js/jQuery.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('/themes/ourtheme/cabinet/js/popper.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('/themes/ourtheme/cabinet/js/bootstrap.min.js') }}"></script>--}}
{{--</head>--}}
{{--<body>--}}

@section('links')
    <link rel="stylesheet" href="{{ asset('/themes/ourtheme/cabinet/css/selectBlock.css') }}">
@endsection

@extends('cabinet.layout')

@section('header')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="block col-sm-12 col-md-3">
                    <a href="{{ route('checkpoint') }}">
                        <span class="textInBlock">Электронная проходная</span>
                    </a>
                </div>
                <div class="block col-sm-12 col-md-3">
                    <a href="{{ route('journal.current.week') }}">
                        <span class="textInBlock">Электронный дневник</span>
                    </a>
                </div>
                <div class="block col-sm-12 col-md-3">
                    <span class="inWorkText">В РАЗРАБОТКЕ</span>
                    <a href="#">
                        <span class="textInBlock">Школьное питание</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
{{--</body>--}}
{{--</html>--}}
