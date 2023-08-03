@extends('layouts.frontend')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Welcome {{session('username')}}</p>
        <div>
            <div>
                @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @elseif(Session::has('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
            
            @endif
                
            </div>
        <form method="POST" action="{{route('dashboard.store')}}" class="dashboard">
            @csrf
            <textarea id="notepad" placeholder="Enter your text here " name="memo"></textarea><br>
            <button type="submit">Save Note</button>
        </form>
    </div>
       
</body>
</html>

@endsection