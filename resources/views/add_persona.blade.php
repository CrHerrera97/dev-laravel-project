<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>agregar persona</h3>

    <form action="{{ route('post_persona.store') }}" method="post">
        @csrf
        <input type="text" name="nombre" id="nombre">
        <input type="text" name="edad" id="nombre">

        <button type="submit">crear persona</button>
    </form>
</body>
</html>