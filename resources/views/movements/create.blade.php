@extends('layouts.main')

@section('content')
<h1>Create movement</h1>
<form action="{{ route('movements.store') }}" method="POST">
    @csrf
    <label for="user_id">User</label>
    <select name="user_id">
        <option value="">Select an user</option>
        @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <a href="{{ route('users.create') }}">New</a>

    <label for="profile_id">Profile</label>
    <select name="profile_id">
        <option value="">Select a profile</option>
        @foreach ($profiles as $profile)
        <option value="{{ $profile->id }}">{{ $profile->name }}</option>
        @endforeach
    </select>
    <a href="{{ route('profiles.create') }}">New</a>

    <label for="category_id">Category</label>
    <select name="category_id">
        <option value="">Select a category</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <a href="{{ route('categories.create') }}">New</a>

    <label for="amount">Amount</label>
    <input type="text" id="amount" name="amount">

    <input type="submit" value="Create movement"/>
</form>
@endsection
