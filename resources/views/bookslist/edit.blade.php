@extends('layouts.app')

@section('content')
    <h1>Edit List</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form style="margin-left: 15px" action="{{ route('bookslist.update', $bookslist->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Author</label>
            <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Genre</label>
            <input type="text" name="genre" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Year</label>
            <input type="text" name="year" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">File</label>
            <input type="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Book</button>
    </form>
@endsection
