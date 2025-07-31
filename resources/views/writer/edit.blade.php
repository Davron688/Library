@extends('layouts.app')

@section('title')
@endsection

@section('header')
@endsection

@section('content')

    <form action="{{route('writer.update',$writer)}}" method="post">
        @csrf
        @method('put')
        <label>name</label><br>
        <input type="text" class="form-control" name="name" value="{{$writer->name}}" id=""><br>
        <label>biography</label><br>
        <input type="text" class="form-control" name="biography"  value="{{$writer->biography}}" id=""><br>
        <label>image</label><br>
        <input type="file" class="form-control" name="image"  value="{{$writer->image}}" id=""><br>
        <label>birthdate</label><br>
        <input type="date" class="form-control" name="birthdate"  value="{{$writer->birthdate}}" id=""><br>
        <label>gender</label><br>
        <input type="text" class="form-control" name="gender"  value="{{$writer->gender}}" id=""><br>
        <input class="btn btn-outline-primary" type="submit">
    </form>

@endsection
