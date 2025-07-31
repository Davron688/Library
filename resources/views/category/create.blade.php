@extends('layouts.app')

@section('title')
    Application create
@endsection

@section('header')
    Create
@endsection

@section('content')
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <label for="">name</label>
        <input type="text" name="name" class="form-control">
        <label for="">description</label>
        <input type="text" name="description" class="form-control">
        <input type="submit" class="btn btn-primary" value="Save">
    </form>
@endsection
