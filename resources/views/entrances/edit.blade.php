@extends('layouts.app')

@section('content')
    <h1 style="margin-left: 15px">Edit User</h1>
<br>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="margin-left: 15px" action="{{ route('entrances.update', $entrance->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <lable for="name">Login</lable>
        <input type="text" name="login" class="form-control">
        </div>
        <div class="form-group">
            <lable for="name">Password</lable>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
@endsection
