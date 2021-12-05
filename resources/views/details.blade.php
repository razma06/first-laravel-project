<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body{
            display: grid;
            place-content: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
        }

        h1{
            font-size: 3rem;
            color: brown;
        }

        a{
            letter-spacing: 20px;
            font-size: 2rem;
            color: dodgerblue;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    @foreach ($videos as $video)
        <h1>Name {{$video->name}}</h1>
        <h2><a href="{{$video->link}}" target="_blank">Link</a></h2>
        <p>Desctription: {{$video->description}}</p>
        <h3>Views {{$video->views}}</h3>
    @endforeach
</body>
</html>