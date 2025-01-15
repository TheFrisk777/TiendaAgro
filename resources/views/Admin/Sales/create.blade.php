@extends('layout.main_template')
@section('content')

<h2 class="text-center">Vender un Producto</h2>
<br>

<div class="form-container">
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre del Producto:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Ingrese el nombre del producto" required>
        </div>

        <div class="form-group">
            <label for="price">Precio:</label>
            <input type="number" id="price" name="price" class="form-control" placeholder="Ingrese el precio del producto" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="category">Categoría:</label>
            <select id="category" name="cat_id" class="form-control" required>
                <option value="" disabled selected>Seleccione una categoría</option>
                @foreach($categories as $category->id)
                    <option value="{{ $category->id }}">{{ $category->nameProd }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" class="form-control" placeholder="Ingrese una descripción" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Producto</button>
    </form>
</div>

<style>
    .form-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #f9f9f9;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .btn {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        text-align: center;
        font-size: 16px;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>

@endsection
