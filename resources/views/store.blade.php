<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ global_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ global_asset('css/style.css') }}" rel="stylesheet">
    <style>
    html body{
        font-family: 'Poppins';
        font-weight: 400;;
    }
    .bgbody{
        background-color: #E4D7D7;
    }    
    </style>
</head>
<body class="bg-white">
   <nav class="navbar navbar-light bg-white justify-content-center">
    <a class="navbar-brand" href="#">
        <img src="{{ global_asset('images/zeus_logo.png') }}"  alt="" loading="lazy">
    </a>
    </nav>
  <div id="app">
 
  </div>
    
<footer class="bg-light p-2">
<div class="d-flex justify-content-between">
<p class="my-4">&copy; 2010-2020 Privacy-Terms</p>
<div class="d-flex justify-content-end">
<img src="{{ global_asset('images/master.png') }}" class="my-4" alt="">
<img src="{{ global_asset('images/vis.png') }}" class="my-4" alt="">
</div>
</div>
   
</footer> 
 <!-- Scripts -->
    <script src="{{ global_asset('js/app.js') }}" defer></script>
</body>
</html>
