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
    <form action="/name" method="GET">
        <button type="submit">GET NAME</button>
    </form>

    <form action="/surname" method="GET">
        <button type="submit">GET SURNAME</button>
    </form>

    <form action="/age" method="GET">
        <button type="submit">GET AGE</button>
    </form>

    <form action="/hobby" method="GET">
        <button type="submit">GET HOBBY</button>
    </form>

    <form action="/favorite-food" method="GET">
        <button type="submit">GET FAVORITE FOOD</button>
    </form>
    <form action="/login" method="GET">
        <button type="submit">LINK FOR POST</button>
    </form>
</body>

</html>