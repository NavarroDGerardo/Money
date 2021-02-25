@extends('layouts.main')

@section('content')
<h1>List of profiles</h1>
<p>
    Create a profile, <a href="{{route('profiles.create')}}">click here.</a>
</p>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Money</th>
            <th>Type</th>
            <th>User_id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profiles as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->money }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->usuario_id }}</td>
                <td><a href="{{route('profiles.edit', $item->id ) }}"> Edit</a></td>
                <td>
                    <form action="{{ route('profiles.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remove</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection