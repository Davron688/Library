@extends('layouts.app')

@section('title')
@endsection

@section('header')
@endsection

@section('content')

    <form action="{{route('library.update',$library)}}" method="post">
        @csrf
        @method('put')
        <label>name</label><br>
        <input type="text" class="form-control" name="name" value="{{$library->name}}" id=""><br>
        <label>location</label><br>
        <input type="text" class="form-control" name="location"  value="{{$library->location}}" id=""><br>
        <label>description</label><br>
        <input type="text" class="form-control" name="description"  value="{{$library->description}}" id=""><br>
        <label>year</label><br>
        <input type="date" class="form-control" name="year"  value="{{$library->year}}" id=""><br>
        <label>type</label><br>
        <input type="text" class="form-control" name="type"  value="{{$library->type}}" id=""><br>
        <label>square</label><br>
        <input type="number" class="form-control" name="square"  value="{{$library->square}}" id=""><br>
        <input class="btn btn-outline-primary" type="submit">
    </form>

@endsection
