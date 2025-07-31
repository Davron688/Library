@extends('layouts_template.app')
@section('content')
    {{$categories}}

    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Category</th>
        </tr>


        @foreach($categories as $category)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$category->name}}</td>
            </tr>

        @endforeach
    </table>
@endsection
