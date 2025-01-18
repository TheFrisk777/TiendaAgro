@extends('layout.main_template')

@section('content')
<br>
<h1 class="text-center">Añadir un Producto</h1>
<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>
@endif

<style>
    .form-container {
        margin: 20px auto;
        padding: 20px;
        width: 50%;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    input, select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-actions {
        margin-top: 20px;
        text-align: center;
    }

    button, .btn-cancel {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        text-decoration: none;
        color: white;
    }

    .btn-submit {
        background-color: #28a745;
    }

    .btn-cancel {
        background-color: #dc3545;
    }
</style>

<div class="form-container">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label for="">Nombre del Producto</label>
        <input type="text" name="nameProd" placeholder="Ingrese el Nombre del Producto">

        <label for="">Categoria</label>
        <select name="cat">
            <option value="">Selecciona...</option>
            @foreach ($categories as $category=>$id)
            <option value="{{$id}}">{{$category}}</option>
            @endforeach
        </select>

        <label for="">Descripción</label>
        <input type="text" name="descProd" placeholder="Ingrese la Descripción del Producto">
        
        <label for="">Cantidad</label>
        <input type="number" name="stock" placeholder="Ingrese la Cantidad de Productos">

        <label for="">Precio Unitario</label>
        <input type="number" name="price" placeholder="Ingrese el Precio">

        <label for="">Imagen</label>
        <input type="file" name="imagen">

        <div class="form-actions">
            <button type="submit" class="btn-submit">Registrar</button>
            <a href="{{ route('products.index') }}" class="btn-cancel">Cancelar</a>
        </div>
    </form>
</div>

@endsection
