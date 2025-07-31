@extends('layouts.app')

@section('content')

    <h1 style="margin-left: 15px">User list<h1>

    <a style="margin-left: 15px" href="{{route('entrances.create')}}" class="btn btn-primary mt-3">
        Add User
    </a>
            <br><br>
    <table style="margin-left: 15px" class="table table-bordered">
        <thead>
        <tr>
            <th>Login</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($entrances as $entrance)
            <tr>
                <td>{{ $entrance->login}}</td>
                <td>{{ $entrance->password }}</td>
                <td>

                    <a href="{{ route('entrances.edit',$entrance) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route ('entrances.destroy', $entrance) }}" method="POST" style="display: inline-block;">
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
