@extends('layouts.main')

@section('content')
<h1>Update profile</h1>
<form action="{{ route('profiles.update', $profile->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" value="{{$profile->name}}">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Update profile">
    </div>
</form>

<form action="{{ route('profiles.destroy', $profile->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <div class="form-group">
        <input type="submit" class="btn btn-danger" value="Delete profile"/>
    </div>
</form>
@endsection
