@extends('layouts.main')

@section('content')
<h1>Update profile</h1>
<form action="{{ route('profiles.update', $profile->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$profile->name}}">
    </div>
    <input type="submit" class="btn btn-primary" value="Update profile">
</form>

<form action="{{ route('profiles.destroy', $profile->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete profile"/>
</form>
@endsection
