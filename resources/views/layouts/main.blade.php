<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='/css/styles.css'>
</head>
<body>
    <header>
        <nav class="nav.navbar.navbar-expand-lg navbar-light">
            <div class="collapse navbar-collpase" id="navbar">
                <a class="/" class="navbar-brand"></a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/products/create" class="nav-link">Criar produto</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<h1>Product Manager</h1><br><br>
{{-- <h2>Meu nome é: {{ $name }}</h2> --}}
@yield('content')
<footer> Projeto para teste da Fsofter, criado por @JRevoredo</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script></body>
</html>
