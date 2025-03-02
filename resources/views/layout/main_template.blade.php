<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracrud</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body style="background-image: url('https://png.pngtree.com/background/20230410/original/pngtree-cartoon-plant-border-background-picture-image_2377441.jpg')">
    @include('fragments.navbar')
    @if(@session('status'))
        {{session('status')}}
    @endif
    @yield('content')
</body>
</html>