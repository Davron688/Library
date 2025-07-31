<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Книги</title>
    <style>
        .book-gallery {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }
        .book {
            text-align: center;
        }
        .book img {
            width: 200px;
            height: auto;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<h1 style="text-align: center;">Галерея книг</h1>

<div class="book-gallery">



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
