<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <script src="https://kit.fontawesome.com/2ecaabd2c2.js" crossorigin="anonymous"></script><!-- Add this in the head section of your HTML file -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @include('sweetalert::alert') 
    @vite(['resources/js/app.js'])
</head>

<body>



    @yield('content')

 
</body>


</html>