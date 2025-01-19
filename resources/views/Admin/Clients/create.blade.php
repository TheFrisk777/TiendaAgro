@extends('layout.main_template')
@section('content')
<br>
<h2 class="text-center">Crear Nuevo Cliente</h2>
<br>

@vite(['resources/css/app.css', 'resources/js/app.js'])

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

    button, .btn-cancel, .btn-submi {
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
    <form action="{{route('clients.store')}}" method="POST">
        @csrf

        <label for="name">Nombre del Cliente</label>
        <input type="text" name="name" placeholder="Ingrese el nombre del Cliente" required>

        <label for="last_name">Apellido del Cliente</label>
        <input type="text" name="last_name" placeholder="Ingrese el Apellido del Cliente" required>

        <label for="second_last_name">Segundo Apellido del Cliente</label>
        <input type="text" name="second_last_name" placeholder="Ingrese el Segundo Apellido del Cliente" required>

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Ingrese el Email del Cliente" required>

        <label for="phone">Telefono</label>
        <input type="text" name="phone" placeholder="Ingrese el Telefono del Cliente" required>

        <div class="form-actions">
            <button type="submit" class="btn btn-submit">Registrar</button>
            <a href="{{ route('categories.index') }}" class="btn btn-cancel">Cancelar</a>
        </div>
    </form>
</div>

@endsection
