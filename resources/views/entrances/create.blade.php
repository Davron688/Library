@extends('layouts.app')

@section('content')

    <h1 style="margin-left: 15px">Create User</h1>
<br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form style="margin-left: 15px" action="{{ route('entrances.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Login</label>
            <input type="text" name="login" class="form-control" value="{{old('login')}}">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" value="{{old('password')}}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
@endsection
