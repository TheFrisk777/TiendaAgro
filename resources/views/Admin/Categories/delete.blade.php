@extends('layout.main_template')

@section('content')

<br>
<h2 class="text-center">Eliminación de Categoría</h2>
<br>

<div class="form-container">
    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
        @method("DELETE")
        @csrf
        
        <h3>¿Quieres eliminar la categoría: {{ $category->category }}?</h3>
        
        <div class="form-actions">
            <a type="button" class="btn btn-success" href="{{ route('categories.index') }}">No</a>
            <button type="submit" class="btn btn-danger">Sí</button>
        </div>
    </form>
</div>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    /* Contenedor para el formulario */
    .form-container {
        margin: 20px auto;
        padding: 20px;
        width: 50%;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    h3 {
        margin-bottom: 20px;
    }

    .form-actions {
        text-align: center;
    }

    /* Estilos para los botones */
    .btn {
        padding: 7px 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        text-decoration: none;
        color: white;
    }

    .btn-success {
        background-color: #28a745;
        margin-left: 10px;
    }

    .btn-danger {
        background-color: #dc3545;
        margin-left: 10px;
    }

    .btn:hover {
        opacity: 0.9;
    }
</style>

@endsection
