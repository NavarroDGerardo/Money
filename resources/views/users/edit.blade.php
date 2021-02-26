@extends('layouts.main')

@section('content')
<h2>Edit account</h2>
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text"  class="form-control" name="name" value="{{ $user->name }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email"  class="form-control" name="email" value="{{ $user->email }}">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password"  class="form-control" name="password" value="{{ $user->password }}">
    </div>
    <div class="form-group">
        <label for="money">Money</label>
        <input type="text"  class="form-control" name="money" value="{{ $user->money }}">
    </div>
    <div class="form-group">
        <input type="submit"  class="btn btn-primary" value="Update account"></button>
    </div>
</form>

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete account"/>
</form>
@endsection
