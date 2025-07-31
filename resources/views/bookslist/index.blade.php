@extends('layouts.app')

@section('content')

    <h1 style="margin-left: 15px">Book List</h1>

    <a style="margin-left: 15px" href="{{ route('bookslist.create') }}" class="btn btn-primary mt-3">
        Add List
    </a>
<br><br>
    <table style="margin-left: 15px;" class="table table-bordered">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Image</th>
            <th>File</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bookslist as $booklist)
            <tr>
                <td>{{ $booklist->title }}</td>
                <td>{{ $booklist->author }}</td>
                <td>{{ $booklist->genre }}</td>
                <td>{{ $booklist->year }}</td>
                <td>
                    <a href="{{asset('storage/'.$booklist->image)}}" target="_blank">
                        <img src="{{asset('storage/'.$booklist->image)}}" alt="123" width="80" height="90">
                    </a>
                </td>
                <td>
                    @if ($booklist->file)
                        <a href="{{ asset('storage/' . $booklist->file) }}" target="_blank">Открыть PDF</a>
                    @else
                        Нет файла
                    @endif
                </td>

                <td>
                    <a href="{{ route('bookslist.edit',$booklist) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route ('bookslist.destroy', $booklist) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
