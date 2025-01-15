@extends('layout.main_template')
@section('content')

<br>
<h2 class="text-center">Editar Categoría</h2>
<br>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    .form-container {
        margin: 20px auto; /* Centra el formulario y añade un margen superior */
        padding: 20px;
        width: 50%; /* Ancho del formulario */
        border: 1px solid #ddd; /* Borde del formulario */
        border-radius: 5px; /* Bordes ligeramente redondeados */
        background-color: #f9f9f9; /* Fondo claro */
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px; /* Espacio entre los campos */
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-actions {
        margin-top: 20px; /* Separación de los botones */
        text-align: center;
    }

    button, .btn-cancel, .btn-submit {
        padding: 7px 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        text-decoration: none;
        color: white;
    }

    .btn-submit {
        background-color: #28a745;
        margin-left: 10px;
    }

    .btn-cancel {
        background-color: #dc3545;
        margin-left: 10px;
    }
</style>

<div class="form-container">
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="category">Nombre de la Categoría</label>
        <input type="text" name="category" value="{{$category->category}}">

        <label for="description">Descripción</label>
        <input type="text" name="description" value="{{$category->description}}">

        <div class="form-actions">
            <button type="submit" class="btn btn-submit">Actualizar</button>
            <a href="{{ route('categories.index') }}" class="btn btn-cancel">Cancelar</a>
        </div>
    </form>
</div>

@endsection
