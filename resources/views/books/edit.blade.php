@extends('layouts.app')

@section('content')
    <h1>Edit Book</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
        @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('books.update',$book) }}" method="POST">
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
            <label for="name">Publication_year</label>
            <input type="text" name="publication_year" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Language</label>
            <input type="text" name="language" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Copies_total</label>
            <input type="text" name="copies_total" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>>
    </form>
