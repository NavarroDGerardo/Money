@extends('layouts.main')

@section('content')
<h1>Create movement</h1>
<form action="{{ route('movements.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="user_id">User</label>
        <select class="form-control" name="user_id">
            <option value="">Select an user</option>
            @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <a href="{{ route('users.create') }}">New User</a>
    </div>

    <div class="form-group">
        <label for="profile_id">Profile</label>
        <select class="form-control" name="profile_id">
            <option value="">Select a profile</option>
            @foreach ($profiles as $profile)
            <option value="{{ $profile->id }}">{{ $profile->name }}</option>
            @endforeach
        </select>
        <a href="{{ route('profiles.create') }}">New Profile</a>
        </div>

    <div class="form-group">
        <label for="category_id">Category</label>
        <select class="form-control" name="category_id">
            <option value="">Select a category</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <a href="{{ route('categories.create') }}">New Category</a>
    </div>

    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="text" class="form-control" id="amount" name="amount">
    </div>
    <input type="submit" class="form-control btn-primary" value="Create movement"/>


</form>
@endsection
