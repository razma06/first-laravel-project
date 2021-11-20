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

        button {
            width: 25rem;
            padding-block: 1rem;
            background-color: #d1d8e0;
            border-radius: .5rem;
            border: solid 2px #a55eea;
            color: #8854d0;
            font-weight: 900;
            font-size: 1.3rem;
            cursor: pointer;
            transition: 0.5s;
        }

        button:hover {
            background-color: #a55eea;
            color: white;
        }
    </style>
</head>

<body>
    <form action="/successful" method="POST">
        @csrf
        <button type="submit">SUBMIT</button>
    </form>
</body>

</html>