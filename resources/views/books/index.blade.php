@extends('layouts.app')

@section('content')
    <h1>Book List</h1>

    <table class="table">
        <thead>
        <tr>
            <th>title</th>
            <th>author</th>
            <th>genre</th>
            <th>publication_year</th>
            <th>language</th>
            <th>description</th>
            <th>copies_total</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ $book->publication_year }}</td>
                <td>{{ $book->language }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->copies_total }}</td>
                <td>
            <a href="{{ route('books.edit',$book) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route ('books.destroy', $book) }}" method="POST" style="display: inline-block;">
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
