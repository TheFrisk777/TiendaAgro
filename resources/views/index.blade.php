<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracrud</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        .center-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .center-content img {
            max-width: 300px;
            width: 100%;
            height: auto;
        }
        .center-content h1 {
            margin-top: 20px;
            font-size: 2.5rem;
            font-weight: bold;
            color: #0a430c87;
        }
    </style>
</head>
<body>
    <div class="center-content">
        <img src="https://zenithamericas.com.do/wp-content/uploads/2024/07/Agroquimicos-x2.svg" alt="Logo AgroTech">
        <h1>AgroTech</h1>
    </div>

    @if(@session('status'))
        {{session('status')}}
    @endif
    @yield('content')
</body>
</html>
@extends('layout.main_template')