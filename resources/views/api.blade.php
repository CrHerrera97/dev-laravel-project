<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>consumo api</h3>
    

    <table>
    <tr>
        <th>Nombre de pokemones</th>
        <th>Links</th>
    </tr>
    
    @foreach($data['results'] as $datos)
    <form action="{{ route('mostrar',$datos['name']) }}" method="get">
    <tr>
        <td>{{ $datos['name'] }}</td>
        <td>{{ $datos['url'] }}</td>
        <!--<td><a href="{{$datos['name']}}">Mostrar</a></td>-->
        <td><a href="{{ route('mostrar', $datos['name']) }}">Mostrar</a></td>

    </tr>
    @endforeach
    </table>
    </form>
</body>
</html>