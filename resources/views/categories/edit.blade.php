@extends('layouts.main')

@section('content')
<h1>Edit category</h1>
<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}"/>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary"value="Update category"/>
    </div>
</form>

<form action="{{ route('categories.destroy', $category->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger" value="Delete category"/>
</form>
@endsection
