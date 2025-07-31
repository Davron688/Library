@extends('layouts.app')

@section('title')
@endsection

@section('header')
@endsection

@section('content')
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>location</th>
            <th>description</th>
            <th>year</th>
            <th>type</th>
            <th>square</th>
            <th>Удалить</th>

        </tr>
        @foreach($libraries as $library)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$library->name}}</td>
                <td>{{$library->location}}</td>
                <td>{{$library->description}}</td>
                <td>{{$library->year}}</td>
                <td>{{$library->type}}</td>
                <td>{{$library->square}}</td>
                <td>
                    <a href="{{route('library.show',$library)}}" class="btn btn-outline-warning">Посмотреть</a>

                </td>
                <td>
                    <a href="{{route('library.edit',$library)}}" class="btn btn-outline-primary">Изменить</a>
                </td>
                <td>
                    <form action="{{route('library.destroy',$library)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Удалить">
                    </form>
                </td>

            </tr>

        @endforeach
    </table>
    <div class="card-header">
        <a href="{{ route('libraries.create') }}" class="btn btn-primary">Добавить</a>
    </div>

@endsection
