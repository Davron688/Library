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
            <th>biography</th>
            <th>image</th>
            <th>birthdate</th>
            <th>gender</th>
            <th>Удалить</th>

        </tr>
        @foreach($writer as $writer)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$writer->name}}</td>
                <td>{{$writer->biography}}</td>
                <td>{{$writer->image}}</td>
                <td>{{$writer->birthdate}}</td>
                <td>{{$writer->gender}}</td>
                <td>
                    <a href="{{route('writer.show',$writer)}}" class="btn btn-outline-warning">Посмотреть</a>

                </td>
                <td>
                    <a href="{{route('writer.edit',$writer)}}" class="btn btn-outline-primary">Изменить</a>
                </td>
                <td>
                    <form action="{{route('writer.destroy',$writer)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Удалить">
                    </form>
                </td>

            </tr>

        @endforeach
    </table>
    <div class="card-header">
        <a href="{{ route('writer.create') }}" class="btn btn-primary">Добавить</a>
    </div>

@endsection
