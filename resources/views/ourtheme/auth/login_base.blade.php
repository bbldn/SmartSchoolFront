<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Вход | {{ config('app.name', 'Laravel') }}</title>

    <script type="text/javascript" src="{{ asset('/themes/ourtheme/sign/js/bootstrap.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/ourtheme/sign/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/ourtheme/sign/css/styleSign.css') }}">
</head>

<body>
<div class="container">
    @yield('content')
</div>

</body>
</html>
