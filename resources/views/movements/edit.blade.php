@extends('layouts.main')

@section('content')
<h1>Edit movement</h1>
<form action="{{ route('movements.update', $movement->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="user_id">User</label>
        <select class="form-control" name="user_id">
            <option value="">Select an user</option>
            @foreach ($users as $user)
            @if ($movement->user_name === $user->name)
            <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
            @else
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endif
            @endforeach
        </select>
        <a href="{{ route('users.create') }}">New User</a>
    </div>

    <div class="form-group">
        <label for="profile_id">Profile</label>
        <select class="form-control" name="profile_id">
            <option value="">Select a profile</option>
            @foreach ($profiles as $profile)
            @if ($movement->profile_name === $profile->name)
            <option value="{{ $profile->id }}" selected>{{ $profile->name }}</option>
            @else
            <option value="{{ $profile->id }}">{{ $profile->name }}</option>
            @endif
            @endforeach
        </select>
        <a href="{{ route('profiles.create') }}">New Profile</a>
        </div>

    <div class="form-group">
        <label for="category_id">Category</label>
        <select class="form-control" name="category_id">
            <option value="">Select a category</option>
            @foreach ($categories as $category)
            @if ($movement->category_name === $category->name)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
        </select>
        <a href="{{ route('categories.create') }}">New Category</a>
    </div>

    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="text" class="form-control" id="amount" name="amount" value="{{ $movement->amount }}">
    </div>
    <input type="submit" class="btn-primary" value="Create movement"/>
</form>

<form action="{{ route('movements.destroy', $movement->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger" value="Delete movement"/>
</form>
@endsection
