@extends('layouts.main')

@section('content')
<h2>Money manager</h2>
<div class="form-group">
<a href="{{ route('users.index') }}" class="form-control">View users</a>
<a href="{{ route('categories.index') }}" class="form-control">View categories</a>
<a href="{{ route('profiles.index') }}" class="form-control">View profiles</a>
</div>

<div class="form-group">
    <a href="{{ route('movements.create') }}">Create another movement</a>
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Profiles</th>
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
        <td>
            @foreach($movement->profiles as $profile)
            {{ $profile->name }}<br>
            @endforeach
        </td>
        <td>{{ $movement->category_name }}</td>
        <td>{{ $movement->amount }}</td>
        <td><a href="{{ route('movements.edit', $movement->id) }}">Edit</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
