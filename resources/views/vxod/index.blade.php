@extends('layouts.app')

@section('content')
    <h1>Вход</h1>
    <form action="" method="POST">
        <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
@endsection
