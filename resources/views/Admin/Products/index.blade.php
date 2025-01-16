@extends('layout.main_template')
@section('content')

<br>
<h2 class="text-center">Lista de Productos Agroquímicos</h2>
<br>

<div class="button-container">
    <a href="{{ route('products.create') }}" class="btn btn-outline-success">Crear Producto</a>
</div>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    /* Contenedor de la tabla */
    .table-container {
        margin: 0 auto; /* Centra la tabla */
        padding: 0 20px; /* Espacio en los lados izquierdo y derecho */
        width: 90%; /* Ajusta el ancho según lo que necesites */
        box-sizing: border-box; /* Asegura que el padding esté dentro del ancho */
    }

    /* Tabla */
    table {
        width: 100%; /* La tabla ocupará el 100% del ancho del contenedor */
        border-collapse: collapse; /* Elimina los espacios entre las celdas */
    }

    th, td {
        padding: 8px; /* Espacio dentro de las celdas */
        text-align: center; /* Alineación del texto dentro de las celdas */
        border: 1px solid #ddd; /* Borde de las celdas */
    }

    th {
        background-color: #f8f9fa; /* Color de fondo del encabezado */
    }

    /* Imagen en la tabla */
    img {
        width: 50px; 
        height: auto; 
        border-radius: 5px; /* Bordes redondeados */
    }

    .button-container {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    #Pa {
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: bold;
        border: 1px solid #28a745;
        background-color: #f8f9fa;
        color: #28a745;
        text-decoration: none;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    #Pa {
        background-color: #28a745;
        color: #fff;
    }

    .btn a {
        text-decoration: none;
        color: inherit;
    }
</style>

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->nameProd }}</td>
                <td>{{ $product->category->category}}</td>
                <td>{{ $product->descProd }}</td>
                <td>{{ $product->stock }}</td>
                <td>${{$product->price}}</td>
                <td><img src="/imagen/products/{{$product->imagen}}" alt="producto"></td>
                <td>
                    <a type="button" class="btn btn-warning" href="{{route('products.edit',$product)}}">
                        <i class="fa-solid fa-file-signature"></i>
                    </a>
                    <a type="button" class="btn btn-danger" href="{{route('products.delete',$product)}}">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Paginación -->
<div class="d-flex justify-content-center mt-3">
    {{ $products->links() }}
</div>

@endsection

