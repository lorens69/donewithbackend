<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <script src="https://kit.fontawesome.com/2ecaabd2c2.js" crossorigin="anonymous"></script>
  
    @vite(['resources/js/app.js'])
</head>

<body>



    @yield('content')

 
</body>

</html>