@extends('layouts.main')

@section('content')
<h2>List of profiles</h2>
<a href="{{ route('profiles.create') }}">Create profile</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profiles as $profile)
        <tr>
            <td>{{ $profile->id }}</td>
            <td>{{ $profile->name }}</td>
            <td>
                <a href="{{route('profiles.edit', $profile->id ) }}">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
