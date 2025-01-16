@extends('layout.main_template')

@section('content')


<br>
<h1 class="text-center">Registrar una Venta</h1>
<br>

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

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif
<div class="form-container">
<form action="{{ route('sales.store') }}" method="POST">
    @csrf
    
    <label for="client_id">Cliente</label>
    <select name="client_id" id="client_id" required>
        <option value="" disabled selected>Seleccione un cliente</option>
        @foreach ($clients as $client)
            <option value="{{ $client->id }}">{{ $client->name }} {{ $client->last_name }}</option>
        @endforeach
    </select>
    
    <label for="product_id">Producto</label>
    <select name="product_id" id="product_id" required>
        <option value="" disabled selected>Seleccione un producto</option>
        @foreach ($products as $product)
            <option value="{{ $product->id }}">{{ $product->nameProd}}</option>
        @endforeach
    </select>
    
    <label for="sale_date">Fecha de Venta</label>
    <input type="date" name="sale_date" id="sale_date" required>

    <div class="form-actions">
        <button type="submit" class="btn-submit">Registrar</button>
        <a href="{{ route('products.index') }}" class="btn-cancel">Cancelar</a>
    </div>
</form>

</div>
@endsection