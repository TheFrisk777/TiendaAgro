@extends('layout.main_template')

@section('content')

<br>
<h2 class="text-center">Eliminacion de Venta</h2>
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
<form action="{{route("sales.destroy",$sale->sale_id)}}" method="POST">
@method("DELETE")
@csrf
<h3>¿Quieres Eliminar la Venta: {{$sale->sale_id}}?</h3>
<a type="button" class="btn btn-success" href="{{route("sales.index")}}">No</a>
<button type="submit" class="btn btn-danger">Si</button>
</form>
</div>
@endsection