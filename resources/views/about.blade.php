<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>

        <ul class="nav justify-content-center bg-danger py-1">
            <li class="nav-item">
                <a class="nav-link text-light" href="/" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="about">About</a>
            </li>
        </ul>


    </header>

    <body>
        <div class="container text-center my-4">
            <h1>{{$message}}</h1>

            <p>{{$text}}</p>
        </div>
    </body>

    <footer>

    </footer>
</body>

</html>