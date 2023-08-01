<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
            <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
            <link href="{{asset('css/bootstrap5.css')}}" rel="stylesheet">
            <link href="{{asset('css/custom.css')}}" rel="stylesheet"> 

        
    </head>
    <body>

        <div>
            @include('header')
            @include('widget')
            

            @yield('content')

            @include('footer')

    

        </div>
        <script src="{{asset('js/bootstrap5.js')}}"></script>
        <script src="{{asset('js/jquery-3.7.0.js')}}"></script>
        
    </body>
</html>
