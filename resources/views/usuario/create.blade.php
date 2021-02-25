<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Log in</title>
</head>
<body>
    <div class="container">
    <h2>Log in</h2>
    <form action="{{route('usuarios.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text"  class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password"  class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="money">Money: $</label>
            <input type="text"  class="form-control" name="money">
        </div>
        <div class="form-group">
            <button type="submit"  class="btn btn-primary" value="Store">Submit</button>
        </div>
    </form>
    </div>
</body>
</html>
