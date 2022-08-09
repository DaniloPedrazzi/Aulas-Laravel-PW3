<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li> <a href="/">Home</a> </li>
                <li> <a href="/contato">Contato</a> </li>
                <li> <a href="/cliente">Cliente</a> </li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        All Rights Reserved
    </footer>

</body>
</html>