@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Añadir un Producto</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
@csrf
    <label for="">Nombre del Producto</label>
    <input type="text" name="nameProducts">

    <label for="">Descripción</label>
    <input type="text" name="descProd">

    <label for="">Categoria</label>
    <select name="cat_id">
        <option value="">Selecciona...</option>
        @foreach ($category as $cat=>$id)
        <option value="{{$id}}">{{$cat}}</option>
        @endforeach
    </select>
    
    <label for="">Cantidad</label>
    <input type="number" name="stock">

    <label for="">Precio Unitario</label>
    <input type="text" name="unit_price">

    <label for="">Imagen</label>
    <input type="file" name="imagen">

    <button type="submit">Registrar</button>

</form>
@endsection