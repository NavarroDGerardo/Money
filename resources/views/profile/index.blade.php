@extends('layouts.main')

@section('content')
<div class="container">
<h2>List of profiles</h2>
    <form action="{{ route('profiles.create') }}" >
        <input type="submit" class="btn btn-success" value="Create profile">
    </form>
    <div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Money</th>
            <th>Type</th>
            <th>User_id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profiles as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->money }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->usuario_id }}</td>
                <td>
                    <form action="{{route('profiles.edit', $item->id ) }}">
                        <input type="submit" class="btn btn-primary" value="Edit">
                    </form>
                </td>
                <td>
                    <form action="{{ route('profiles.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection
