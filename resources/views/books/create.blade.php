@extends('layouts.app')

@section('content')
    <h1>Add New Contact</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
        @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
           <label>Title:</label>
            <input type="text" name="title" class="form-control">
            </div>
        <div class="form-group">
            <label>Author:</label>
            <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label>Genre:</label>
            <input type="text" name="genre"  class="form-control">
        </div>
        <div class="form-group">
            <label>Publication_year:</label>
            <input type="number" name="publication_year"  class="form-control" >
        </div>
        <div class="form-group">
            <label>Language:</label>
            <input type="text" name="language" class="form-control">
        </div>
        <div class="form-group">
            <label>Description:</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
            <label>Copies_total:</label>
            <input type="number" name="copies_total" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
    <label for="">Category</label>
    <select name="category_id" id="">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <input type="submit" class="btn btn-primary" value="Save">
    </form>
@endsection
