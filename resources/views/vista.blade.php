<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('add_persona') }}" method="GET">

        <button type="submit">Agregar Persona</button>

    </form>


    <table>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
        </tr>
    @foreach ($dato as $item)
        <tr>
            <td>{{$item->nombre}}</td>
            <td>{{$item->edad}}</td>
            <td><a href="{{route('edit_persona',$item->id)}}">edit</a></td>
            <td><a href="{{route('add_persona')}}">eliminar</a></td>
        </tr>
    @endforeach
    </table>
</body>

</html>