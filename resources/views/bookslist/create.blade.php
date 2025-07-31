@extends('layouts.app')

@section('content')


    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form style="margin-left: 15px" action="{{ route('bookslist.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control" value="{{old('author')}}">
        </div>
        <div class="form-group">
            <label>Genre</label>
            <input type="text" name="genre" class="form-control" value="{{old('genre')}}">
        </div>
        <div class="form-group">
            <label>Year</label>
            <input type="number" name="year" class="form-control" value="{{old('year')}}">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control" value="{{old('image')}}">
        </div>
        <div class="form-group">
            <label>File</label>
            <input type="file" name="file" class="form-control" value="{{old('file')}}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
@endsection
