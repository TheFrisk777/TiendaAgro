@extends('layout.main_template')
@section('content')

<br>
<h2 class="text-center">Lista de Categorías</h2>
<br>

<div class="button-container">
    <a href="{{ route('categories.create') }}" class="btn btn-outline-success">Crear Categoria</a>
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
                <th>Nombre de la Categoría</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->category }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a type="button" class="btn btn-warning" href="{{route('categories.edit',$category)}}">
                        <i class="fa-solid fa-file-signature"></i>
                    </a>
                    <a type="button" class="btn btn-danger" href="{{route('categories.delete',$category)}}">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
