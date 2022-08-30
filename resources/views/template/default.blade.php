<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/default.css')}}">
</head>
<body>
    <div class="header">
        <a href="/" class="logo">Molusco.net</a>
        <div class="header-right">
            <a href="/">Home</a>
            <a href="/categoria">Categoria</a>
            <a href="/cliente">Cliente</a>
            <a href="/pedido">Pedido</a>
            <a href="/produto">Produto</a>
        </div>
    </div>

    @yield('content')

    <footer>
        <hr>
        <p>All Rights Reserved</p>
    </footer>

</body>
</html>