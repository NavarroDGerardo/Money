@extends('layouts.main')

@section('content')
<h1>Profile creator!</h1>
<form action="{{ route('profiles.store') }}" method="POST">
    @csrf
    Name:<input type="text" name="name"> <br>
    Money:<input type="number" name="money"> <br>
    Type:<input type="text" name="type"> <br>
    User_id:<input type="text" name="usuario_id"> <br>
    <button type="submit">Create profile</button>
</form>

@endsection