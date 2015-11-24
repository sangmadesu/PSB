<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/unemi.css')}}">
    <title>PSB</title>
  </head>
  <body>
      @yield('adminPage')
    <div class="secone">
      @yield('register')
      @yield('login')

      @yield('show-registers')
    </div>
  </body>
</html>
