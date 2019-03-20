@extends('cabinet.layout')

@section('header')
    <div class="container-fluid sticky-top my-menu">
        <div class="row navbarRow align-items-center text-center">
            <nav class="col-12 navbar navbar-light navbar-expand-md">
                <a class="navbar-brand" href="">
                    <p>Ваши дети:</p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav justify-content-start">
                        @foreach($parent['children'] as $value)
                            <li class="nav-item">
                                <a class="nav-link flowing-scroll"
                                   href="{{ route('child', ['id' => $value['id']]) }}">{{ $value['profile']['surname'] . " " . $value['profile']['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="row messageRow"></div>
    <div class="overlay_popup"></div>

    <div class="all-wrapper">
        @yield('content')
    </div>

@endsection
