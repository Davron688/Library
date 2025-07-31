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
            <th>description</th>
            <th>Удалить</th>

        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <a href="{{route('$category.show',$category)}}" class="btn btn-outline-warning">Посмотреть</a>

                </td>
                <td>
                    <a href="{{route('category.edit',$category)}}" class="btn btn-outline-primary">Изменить</a>
                </td>
                <td>
                    <form action="{{route('category.destroy',$category)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Удалить">
                    </form>
                </td>

            </tr>

        @endforeach
    </table>
    <div class="card-header">
        <a href="{{ route('category.create') }}" class="btn btn-primary">Добавить</a>
    </div>

@endsection
