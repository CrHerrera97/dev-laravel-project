<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>editar persona</h3>

    <form action="{{ route('post_persona.store') }}" method="post">
        @csrf
        <input type="text" name="nombre" id="nombre" value="{{$datos->nombre}}">
        <input type="text" name="edad" id="nombre" value="{{$datos->edad}}">

        <button type="submit">Editar persona</button>
    </form>
</body>
</html>