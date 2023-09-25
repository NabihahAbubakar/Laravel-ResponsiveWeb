<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RespoWeb</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
     <!-- Add icon library -->
     <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    
</head>
<body>
    @include('layout.nav')
    @yield('home')
    @yield('contact')
    @yield('gallery')
    @yield('aboutus')
    @yield('team')
    @include('layout.footer')
</body>
</html>