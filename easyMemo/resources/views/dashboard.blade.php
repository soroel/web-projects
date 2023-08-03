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
        <form method="POST" action="{{route('store')}}" class="dashboard">
            @csrf
            <textarea id="notepad" placeholder="Enter your text here " name="memo"></textarea><br>
            <button type="submit">Add Note</button>
        </form>
    </div>
    {{-- @php
    dd( );
@endphp --}}

 
    {{-- <table>
        <thead>
            <tr>
                <th>Notes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $note)
                <tr>
                    <td>{{ $note->text }}</td>
                    <td>
                        <form method="POST" action="">
                            @csrf
                            @method('PUT')
                            <input type="text" name="updated_note" placeholder="Update note">
                            <button type="submit">Edit</button>
                        </form>

                        <form method="POST" action="">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
    
</body>
</html>

@endsection