@extends('layouts.app')

@section('title')
@endsection

@section('header')
@endsection

@section('content')
    <table class="table table-striped">
        <tr>
            <td>name</td>
            <td>{{$category->name}}</td>
        </tr>
        <tr>
            <td>description</td>
            <td>{{$category->description}}</td>
        </tr>
    </table>
    <a class="btn btn-primary" href="{{route('category.index')}}">Back</a>

@endsection
