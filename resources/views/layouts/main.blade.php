<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!--Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('home')}}">DompShop</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link {{ request ()-> routeIs ('home') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request ()-> routeIs ('products.create') ? 'active' : '' }}" href="{{route('products.create')}}">Criar produto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request ()-> routeIs ('products.index') ? 'active' : '' }}" href="{{route('products.index')}}">Visualizar produto</a>
                  </li>
               
                </ul>
              </div>
            </div>
          </nav>
          @if ($errors->any())
                <div class="alert alert-danger container mt-3" role="alert">
                    {{$errors->first()}}
                </div>
           @endif
           @if (session('success'))
                <div class="alert alert-success container mt-3" role="alert">
                    {{session('success')}}
                </div>
           @endif
        <div class="container mt-3">
            @yield('content')
        </div>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>
