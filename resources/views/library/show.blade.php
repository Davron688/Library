@extends('layouts.app')

@section('title')
@endsection

@section('header')
@endsection

@section('content')
    <table class="table table-striped">
        <tr>
            <td>name</td>
            <td>{{$library->name}}</td>
        </tr>
        <tr>
            <td>location</td>
            <td>{{$library->location}}</td>
        </tr>
        <tr>
            <td>description</td>
            <td>{{$library->description}}</td>
        </tr>
        <tr>
            <td>year</td>
            <td>{{$library->year}}</td>
        </tr>
        <tr>
            <td>type</td>
            <td>{{$library->type}}</td>
        </tr>
        <tr>
            <td>square</td>
            <td>{{$library->square}}</td>
        </tr>
    </table>
    <a class="btn btn-primary" href="{{route('library.index')}}">Back</a>

@endsection
