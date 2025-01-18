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
                <td><img src="/imagen/products/{{$product->imagen}}" style="width: 100px; height: 75px;"></td>
                <td>{{ $product->nameProd }} </td>
                <td>{{ $product->category->category}}</td>
                <td>{{ $product->descProd }}</td>
                <td>{{ $product->stock }}</td>
                <td>${{$product->price}}</td>
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

@endsection

