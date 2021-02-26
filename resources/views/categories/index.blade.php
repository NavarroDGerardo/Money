@extends('layouts.main')

@section('content')
<h2>List of categories</h2>
<a href="{{ route('categories.create') }}">Create a category</a>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <td>Edit</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($categories as $category)
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td><a href="{{ route('categories.edit', $category->id) }}">Edit</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
