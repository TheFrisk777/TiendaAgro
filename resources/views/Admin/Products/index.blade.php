@extends('layout.main_template')
@section('content')

<br>
<h2 class="text-center">Lista de Productos Agroquimicos</h2>
<br>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    /* Contenedor de la tabla */
    .table-container {
        margin: 0 auto; /* Centra la tabla */
        padding: 0 20px; /* Espacio en los lados izquierdo y derecho */
        width: 90%; /* Puedes ajustar el ancho según lo que necesites */
        box-sizing: border-box; /* Asegura que el padding esté dentro del ancho */
    }

    /* Tabla */
    table {
        width: 100%; /* La tabla ocupará el 100% del ancho del contenedor */
        border-collapse: collapse; /* Elimina los espacios entre las celdas */
    }

    th, td {
        padding: 8px; /* Espacio dentro de las celdas */
        text-align: left; /* Alineación del texto dentro de las celdas */
        border: 1px solid #ddd; /* Borde de las celdas */
    }

    /* Estilos para las columnas */
    th:nth-child(1), td:nth-child(1) {
        width: 20%; /* Hacemos la columna de Producto más pequeña */
    }

    th:nth-child(2), td:nth-child(2) {
        width: 80%; /* Hacemos la columna de Descripción más grande */
    }
</style>

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Descripción</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>
                    <img src="/imagen/products/{{$product->imagen}}" alt="Producto" style="width: 50px; height: auto;">
                </td>
                <td>{{$product->nameProd}}</td>
                <td>{{$product->descProd}}</td>
                <td>{{$product->category->category}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->price}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
