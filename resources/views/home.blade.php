<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>C.V</h1>
    <h2>dati:</h2>
    <h3>Nome : {{$name}}</h3>
    <h3>Lavoro : {{$lavoro}}</h3>
    <h3>Mansione : {{$descrizione}}</h3>

    <a href="{{ route('info') }}">vedi foto di {{$name}}</a>
</body>

</html>