@extends('layouts.main')

@section('content')
<h2>Create account</h2>
<form action="{{route('users.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text"  class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email"  class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password"  class="form-control" name="password">
    </div>
    <div class="form-group">
        <label for="money">Money</label>
        <input type="text"  class="form-control" name="money">
    </div>
    <div class="form-group">
        <input type="submit"  class="btn btn-primary" value="Create account"></button>
    </div>
</form>
@endsection
