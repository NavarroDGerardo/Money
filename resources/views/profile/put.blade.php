@extends('layouts.main')

@section('content')
<div class="container">
<h1>Profile update</h1>
<p>Profile id: {{ $profile->id }}</p>
<form action="{{ route('profiles.update', $profile->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" value={{$profile->name}}>
    </div>
    <div class="form-group">
        <label for="money">Money: $</label>
        <input type="number" name="money" value={{$profile->money}}> <br>
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" name="type" value={{$profile->type}}> <br>
    </div>
    <div class="form-group">
        <label for="usuario_id">User Id:</label>
        <input type="text" name="usuario_id" value={{$profile->usuario_id}}> <br>
    </div>

    <button type="submit" class="btn btn-primary">Update profile!</button>
</form>
</div>
@endsection
