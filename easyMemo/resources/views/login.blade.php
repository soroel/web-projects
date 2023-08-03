@extends('layouts.frontend')

@section('content')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="dashboard" method="post" class="container">
        @csrf
        <h1>Enter your password</h1>  <br><br>      
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit" value="Login">Login</button><br><br>
        <p>Don't have an account? <a href="register">Register</a></p>
    </form>
    
</body>
</html>

@endsection