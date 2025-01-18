@extends('layout.main_template')
@section('content')

<br>
<h1 class="text-center">Editar una Venta</h1>
<br>
@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
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
<form action="{{route('sales.update', $sale->sale_id)}}" method="POST">
    @csrf
    @method('PUT')
    
    
    <label for="client_id">Cliente</label>
    <select name="client_id" required> 
        <option value="">Selecciona...</option>
        @foreach ($clients as $client)
            <option {{ $sale->client_id == $client->id ? 'selected' : '' }} value="{{ $client->id }}">
                {{ $client->name }} {{ $client->last_name }}
            </option>
        @endforeach
    </select>
    <br>

    <label for="product_id">Producto</label>
    <select name="product_id" required>
        <option value="">Selecciona...</option>
        @foreach ($products as $product)
            <option {{ $sale->product_id == $product->id ? 'selected' : '' }} value="{{ $product->id }}">
                {{ $product->nameProd}}
            </option>
        @endforeach
    </select>
    <br>

    <label for="sale_date">Fecha de Venta</label>
    <input type="date" name="sale_date" value="{{ $sale->sale_date }}" required>

    <div class="form-actions">
        <button type="submit" class="btn btn-submit">Actualizar</button>
        <a href="{{ route('clients.index') }}" class="btn btn-cancel">Cancelar</a>
    </div>
</form>

</div>
@endsection