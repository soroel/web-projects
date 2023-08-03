@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Easy Memo</h1>
    </div>
        <div class="col-md-2">
            <a href="{{route('dashboard.create')}}" class="btn btn-primary">Create new memo</a>
        </div> 
        <div class="col-md-12">
            <hr>
        </div> 
</div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Text</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
                @foreach($notes as $note)
                <tr>
                    <td>{{$note->id}}</td>
                    <td>{{$note->content}}</td>
                    <td>{{$note->created_at}}</td>

                    <td>
                        <form method="POST" action="{{route('dashboard.update',$note->id)}}">
                            @csrf
                            @method('PUT')
                            <input type="text" name="memo" placeholder="Update note">
                            <button type="submit">Edit</button>
                        </form>
                        <form method="POST" action="{{route('dashboard.destroy',$note->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                        
                    </td>
                </tr> 
                @endforeach
            </table>
    </div>
    </div>
</div>
@endsection