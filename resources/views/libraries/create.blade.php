@extends('layouts.app')

@section('title')
    Application create
@endsection

@section('header')
    Create
@endsection

@section('content')
    <form action="{{route('library.store')}}" method="post">
        @csrf
        <label for="">name</label>
        <input type="text" name="title" class="form-control">
        <label for="">location</label>
        <input type="text" name="location" class="form-control">
        <label for="">description</label>
        <input type="text" name="description" class="form-control">
        <label for="">year</label>
        <input type="date" name="even_date" class="form-control">
        <label for="">type</label>
        <input type="text" name="type" class="form-control">
        <label for="">square</label>
        <input type="number" name="square" class="form-control">
        <input type="submit" class="btn btn-primary" value="Save">
    </form>
@endsection
