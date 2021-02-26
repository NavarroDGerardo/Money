@extends('layouts.main')

@section('content')
<h1>Edit category</h1>
<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" id="name" name="name" value="{{ $category->name }}"/>
    <input type="submit" value="Update category"/>
</form>

<form action="{{ route('categories.destroy', $category->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete category"/>
</form>
@endsection
