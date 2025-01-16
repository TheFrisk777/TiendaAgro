@extends('layout.main_template')
@section('content')

<br>
<h2 class="text-center">Lista de Productos Agroquímicos</h2>
<br>

<div class="button-container">
    <a href="{{ route('sales.create') }}" class="btn btn-outline-success">Crear Producto</a>
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
                <th>ID Venta</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Fecha de Venta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
            <tr>
                <td>{{ $sale->sale_id }}</td>
                <td>{{ $sale->client->name}}</td>
                <td>{{ $sale->product->nameProd}}</td>
                <td>{{ $sale->sale_date }}</td>
                <td>
                    <a type="button" class="btn btn-warning" href="{{route('sales.edit',$sale)}}">
                        <i class="fa-solid fa-file-signature"></i>
                    </a>
                    <a type="button" class="btn btn-danger" href="{{route('sales.delete',$sale)}}">
                        <i class="fa-solid fa-x"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

