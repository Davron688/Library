@extends('layouts.app')

@section('title')
@endsection

@section('header')
@endsection

@section('content')
    <table class="table table-striped">
        <tr>
            <td>name</td>
            <td>{{$writer->name}}</td>
        </tr>
        <tr>
            <td>biography</td>
            <td>{{$writer->biography}}</td>
        </tr>
        <tr>
            <td>image</td>
            <td>{{$writer->image}}</td>
        </tr>
        <tr>
            <td>birthdate</td>
            <td>{{$writer->birthdate}}</td>
        </tr>
        <tr>
            <td>gender</td>
            <td>{{$writer->gender}}</td>
        </tr>
    </table>
    <a class="btn btn-primary" href="{{route('writer.index')}}">Back</a>

@endsection
