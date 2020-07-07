<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    @foreach ($clothes_list as $item)
        <p>{{$item->id}}</p>
        <p>{{$item->tipo}}</p>
        <p>{{$item->colore}}</p>
        <p>{{$item->disponibilità}}</p>
        <br>
    @endforeach
</body>
</html>