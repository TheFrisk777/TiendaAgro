@extends('layout.main_template')
@section('content')

<br>
<h2 class="text-center">Editar Cliente</h2>
<br>

@vite(['resources/css/app.css', 'resources/js/app.js'])

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

    input {
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
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="">Nombre del Producto</label>
        <input type="text" name="nameProducts" value="{{$product->nameProd}}">

        <label for="">Categoria</label>
        <select name="cat">
            <option value="">Selecciona...</option>
            @foreach ($categories as $category=>$id)
            <option {{$product->cat == $id ? 'selected': ''}} value="{{$id}}">{{$category}}</option>
            @endforeach
        </select>

        <label for="">Descripción</label>
        <input type="text" name="descProd" value="{{$product->descProd}}">
        
        <label for="">Cantidad</label>
        <input type="number" name="stock" value="{{$product->stock}}">

        <label for="">Precio Unitario</label>
        <input type="text" name="unit_price" value="{{$product->unit_price}}">

        <label for="">Imagen</label>
        <input type="file" name="imagen" value="{{$product->imagen}}">

        <div class="form-actions">
            <button type="submit" class="btn btn-submit">Actualizar</button>
            <a href="{{ route('clients.index') }}" class="btn btn-cancel">Cancelar</a>
        </div>
    </form>
</div>

@endsection
