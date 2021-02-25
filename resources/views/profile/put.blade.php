@extends('layouts.main')

@section('content')
<h1>Profile update</h1>
<p>Profile id: {{ $profile->id }}</p>
<form action="{{ route('profiles.update', $profile->id) }}" method="POST">
    @csrf
    @method('PUT')
    Name:<input type="text" name="name" value={{$profile->name}}> <br>
    Money:<input type="number" name="money" value={{$profile->money}}> <br>
    Type:<input type="text" name="type" value={{$profile->type}}> <br>
    User_id:<input type="text" name="usuario_id" value={{$profile->usuario_id}}> <br>

    <button type="submit">Update profile!</button>
</form>

@endsection