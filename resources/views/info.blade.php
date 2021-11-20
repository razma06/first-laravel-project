<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100vw;
            height: 100vh;
            display: grid;
            place-content: center;
            row-gap: 1rem;
            background-color: #fed330;
        }

        h1 {
            color: #a55eea;
            font-family: sans-serif;
            font-size: 10rem;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <h1>{{$info}}</h1>
</body>

</html>