@extends('layouts.main')

@section('content')
<div class="container">
<h2>Create profile</h2>
<form action="{{ route('profiles.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <input type="submit" class="btn btn-primary" value="Create profile">
</form>
</div>
@endsection
