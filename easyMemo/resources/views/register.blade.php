@extends('layouts.frontend')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create an account</title>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap5.css')}}">

</head>
<body>    
        <form action="register" method="post" class="container">
            <h1>Create an account</h1>
    <br><br>
        <input type="text" name="username" id="username" placeholder="Username"><br><br>
        <input type="password" name="password" id="password" placeholder="Password"><br><br>
        <button type="submit" value="Register">Register</button><br><br
        <p>Already have an account? <a href="login">Login</a></p>
    </form>
    

</body>
    
    

</html>

@endsection