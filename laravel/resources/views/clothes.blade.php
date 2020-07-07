<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Colore</th>
                <th>Disponibilità</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clothes_list as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->tipo}}</td>
                <td>{{$item->colore}}</td>
                <td>{{$item->disponibilità}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
</body>
</html>