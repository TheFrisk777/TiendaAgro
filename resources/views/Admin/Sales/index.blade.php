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

    .table-container {
        margin: 0 auto;
        padding: 0 20px;
        width: 90%;
        box-sizing: border-box;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
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
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

