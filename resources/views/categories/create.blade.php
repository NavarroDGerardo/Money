@extends('layouts.main')

@section('content')
<h1>Create category</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    <input type="submit" value="Create category"/>
</form>
@endsection
