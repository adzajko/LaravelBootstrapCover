<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Djajkoski') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!--<script src="{{ asset('js/extra.js')}}" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://t4.rbxcdn.com/927225cb7909b560c2940f263b36982d" type="image/x-icon"/>
</head>
<body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Djajkoski</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/about">About me</a>
            <a class="nav-link" href="/contact">Contact</a>
          </nav>
        </div>
      </header>
   <div class="container">
      @yield('content')
   </div>
    <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Antonij Djajkoski, 2019</p>
          <a href="http://facebook.com/dzajko" class="fa fa-facebook"></a>
          <a href="http://twitter.com/dzajkoo" class="fa fa-twitter"></a>
          <a href="https://www.linkedin.com/in/%D0%B0%D0%BD%D1%82%D0%BE%D0%BD%D0%B8%D1%98-%D1%9F%D0%B0%D1%98%D0%BA%D0%BE%D1%81%D0%BA%D0%B8-46bb79a5/" class="fa fa-linkedin"></a>
          <a href="http://www.instagram.com/antonijdzajkoski" class="fa fa-instagram"></a>
        </div>
      </footer>
  </body>
</html>