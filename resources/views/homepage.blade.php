<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Primma passi con Laravel!</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body{
            font-family: 'Poppins', sans-serif;
        }
        h1{
            color: red;
        }
        h1,
        h2{
            text-align: center;
        }
        .container{
            width: 80%;
            margin: auto;
        }
        ul{
            padding-top: 50px;
            text-align: center;
            list-style: none;
            font-size: 30px;
        }
        li{
            width: 60%;
            margin: auto;
            padding: 20px;
        }
        .even{
            background-color: grey;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Primi passi con Laravel</h1>
        <h2>Cose da fare:</h2>
        <ul>
        @foreach ($todos as $todo)
            @if ($loop->even)
                <li class="even">{{$todo}}</li>
            @else
                <li>{{$todo}}</li>
            @endif
        @endforeach
        </ul>
    </div>
</body>
</html>