@extends('layout.main_template')

@section('content')

<h1 class="text-center">Añadir un Producto</h1>

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
        
        <label for="nameProducts">Nombre del Producto</label>
        <input type="text" name="nameProducts" id="nameProducts" placeholder="Ingrese el nombre del producto" value="{{ old('nameProducts') }}">

        <label for="">Categoria</label>
        <select name="cat_id">
            <option value="">Selecciona...</option>
            @foreach ($categories as $category=>$id)
            <option value="{{$id}}">{{$category}}</option>
            @endforeach
        </select>

        <label for="descProd">Descripción</label>
        <input type="text" name="descProd" id="descProd" placeholder="Ingrese una descripción" value="{{ old('descProd') }}">
        
        <label for="stock">Cantidad</label>
        <input type="number" name="stock" id="stock" placeholder="Ingrese la cantidad" value="{{ old('stock') }}">

        <label for="unit_price">Precio Unitario</label>
        <input type="text" name="unit_price" id="unit_price" placeholder="Ingrese el precio unitario" value="{{ old('unit_price') }}">

        <label for="imagen">Imagen</label>
        <input type="file" name="imagen" id="imagen">

        <div class="form-actions">
            <button type="submit" class="btn-submit">Registrar</button>
            <a href="{{ route('products.index') }}" class="btn-cancel">Cancelar</a>
        </div>
    </form>
</div>

@endsection
