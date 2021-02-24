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

</table>

@endsection