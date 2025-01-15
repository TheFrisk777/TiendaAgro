<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="https://zenithamericas.com.do/wp-content/uploads/2024/07/Agroquimicos-x2.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        AgroTech
        </a>

        <!-- Botones (Index y Productos) -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('index')}}">Index</a>
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