@extends('layouts_template.app')

@section('title')
    Список книг
@endsection

@section('sub-title')
    книги ...
    {{$books}}
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Authors</th>
                        <th>Category</th>
                        <th>Image</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->category->name}}</td>
                            <td><a href="{{asset('storage/'.$book->src)}}" target="_blank">
                                <img src="{{asset('storage/'.$book->image)}}" alt="">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
