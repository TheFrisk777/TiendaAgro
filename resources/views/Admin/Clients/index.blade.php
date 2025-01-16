@extends('layout.main_template')
@section('content')

<br>
<h2 class="text-center">Lista de Clientes</h2>
<br>

<div class="button-container">
    <button id="Pa" class="btn btn-outline-success">
        <a href="{{ route('clients.create') }}">Crear Cliente</a>
    </button>
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
        text-align: left;
        border: 1px solid #ddd;
    }

</style>

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>Nombre del Cliente</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Correo Electrónico</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->last_name }}</td>
                <td>{{ $client->second_last_name}}</td>
                <td>{{ $client->email}}</td>
                <td>{{ $client->phone}}</td>
                <td>
                    <a type="button" class="btn btn-warning" href="{{route('clients.edit',$client)}}">
                        <i class="fa-solid fa-file-signature"></i>
                    </a>
                    <a type="button" class="btn btn-danger" href="{{route('clients.delete',$client)}}">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
