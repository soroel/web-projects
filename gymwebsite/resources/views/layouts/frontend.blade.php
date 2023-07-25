<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

</head>
<body>
    <div class="container">
        @include('includes.header')
        @yield('content')
        @include('includes.widget')
        @include('includes.footer')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/jquery-3.4.1.js')}}"></script>


</body>
</html>