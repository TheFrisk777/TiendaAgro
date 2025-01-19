<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracrud</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        .center-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .center-content img {
            max-width: 300px;
            width: 100%;
            height: auto;
        }
        .center-content h1 {
            margin-top: 20px;
            font-size: 2.5rem;
            font-weight: bold;
            color: #0a430c87;
        }
    </style>
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://zenithamericas.com.do/wp-content/uploads/2024/07/Agroquimicos-x2.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        AgroTech
        </a>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('index')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('products.index')}}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('clients.index')}}">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sales.index')}}">Comprar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('categories.index')}}">Categorias</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<body style="background-image: url('https://png.pngtree.com/background/20230410/original/pngtree-cartoon-plant-border-background-picture-image_2377441.jpg')">
    <div class="center-content">
        <img src="https://zenithamericas.com.do/wp-content/uploads/2024/07/Agroquimicos-x2.svg" alt="Logo AgroTech">
        <h1>AgroTech</h1>
    </div>
</body>
</html>