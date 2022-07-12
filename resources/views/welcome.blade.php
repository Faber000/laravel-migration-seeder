<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
</head>
<body>
    <h1>Treni partiti prima del 12/07/2022</h1>
    @foreach ($trains as $train)
    <h4>Codice Treno</h4>
    <div>{{$train->id}}</div>
    <h4>Azienda</h4>
    <div>{{$train->azienda}}</div>
    <h4>Data Partenza</h4>
    <div>{{$train->d_partenza}}</div>
    <br>
    @endforeach
</body>
</html>