@extends('layouts.main')

@section('content')
<h2>Money manager</h2>
<a href="{{ route('users.index') }}">View users</a>
<a href="{{ route('profiles.index') }}">View profiles</a>
<a href="{{ route('categories.index') }}">View categories</a>

<br>
<a href="{{ route('movements.create') }}">Create another movement</a>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Profile</th>
            <th>Category</th>
            <th>Amount</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($movements as $movement)
    <tr>
        <td>{{ $movement->id }}</td>
        <td>{{ $movement->user_name }}</td>
        <td>{{ $movement->profile_name }}</td>
        <td>{{ $movement->category_name }}</td>
        <td>{{ $movement->amount }}</td>
        <td><a href="{{ route('movements.edit', $movement->id) }}">Edit</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
