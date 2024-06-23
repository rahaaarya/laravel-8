<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arya Blog | {{ $title }}</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  {{-- <link rel="stylesheet" href="bootstrap/css/style.css"> --}}
</head>
<body>
 
  @include('partials.navbar')
  <div class="container mt-4">
    @yield('container')
  </div>

{{-- 
  <script src="bootstrap/js/script.js"></script> --}}
</body>
</html>