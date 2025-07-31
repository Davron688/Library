@extends('layouts.app')

@section('title')
@endsection

@section('header')
@endsection

@section('content')

    <form action="{{route('category.update',$category)}}" method="post">
        @csrf
        @method('put')
        <label>name</label><br>
        <input type="text" class="form-control" name="name" value="{{$library->name}}" id=""><br>
        <label>description</label><br>
        <input type="text" class="form-control" name="description"  value="{{$library->description}}" id=""><br>
        <input class="btn btn-outline-primary" type="submit">
    </form>

@endsection
