@extends('layouts.main')

@section('content')
<div class="container">
<h2>Profile creator!</h2>
<form action="{{ route('profiles.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="money">Money: $</label>
        <input type="number" class="form-control" name="money">
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" name="type">
    </div>
    <div class="form-group">
        <label for="usuario_id">User Id:</label>
        <input type="text" class="form-control" name="usuario_id">
    </div>
    <button type="submit" class="btn btn-primary">Create profile</button>
</form>
</div>
@endsection
