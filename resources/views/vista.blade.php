<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('add_persona') }}">Agregar persona</a></td>


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
            <td>
                <form action="{{route('delete_persona',$item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
</body>

</html>