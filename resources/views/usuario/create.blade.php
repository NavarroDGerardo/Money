<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
</head>
<body>
    <h1>Log in</h1>
    <form action="{{route('usuarios.store')}}" method="POST">
        @csrf
        <div>
            <label for="">name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">password:</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="">money: $</label>
            <input type="text" name="money">
        </div>
        <div>
            <input type="submit" value="Store">
        </div>
    </form>
</body>
</html>