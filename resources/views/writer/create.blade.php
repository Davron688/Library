@extends('layouts.app')

@section('title')
    Application create
@endsection

@section('header')
    Create
@endsection

@section('content')
    <form action="{{route('writer.store')}}" method="post">
        @csrf
        <label for="">name</label>
        <input type="text" name="name" class="form-control">
        <label for="">biography</label>
        <input type="text" name="biography" class="form-control">
        <label for="">image</label>
        <input type="file" name="image" class="form-control">
        <label for="">birthdate</label>
        <input type="date" name="birthdate"  class="form-control">
        <label for="">gender</label>
        <input type="text" name="gender" class="form-control">
        <br>
        <label for="">Category</label>
        <select name="category_id" id="">
            @foreach($categories as category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-primary" value="Save">
    </form>


@endsection
