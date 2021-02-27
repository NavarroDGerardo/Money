@extends('layouts.main')

@section('content')
<h1>Create category</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">
    </div>
    <input type="submit" class="btn btn-primary" value="Create category"/>
</form>
@endsection
