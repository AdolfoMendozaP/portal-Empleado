<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Estadisticas</title>
</head>
<body>
<div class="sidebar">
@include('adminpages.adminbodypages.menu')
</div>
<div class="main-content">
        <div class="container-fluid bg-primary text-light py-3">
        @include('adminpages.adminbodypages.header')
        </div>
   <div class="container-fluid bg-cream py-3">
   @include('adminpages.adminbodypages.section')
   <div class="card">
   @include('adminpages.sectionbodypages.cardProgress')
   </div>
   </div>
   <footer>
    <p id="footer-text">Todos los derechos reservados © <span id="current-year"></span></p>
</footer>
</div>
</body>
</html>