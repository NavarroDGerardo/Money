@extends('layouts.main')

@section('content')
<h2>List of users</h2>
<a href="{{ route('users.create') }}">Create an account</a>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Money</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>${{ $user->money }}</td>
        <td><a href="{{ route('users.edit', $user->id) }}">Edit</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
