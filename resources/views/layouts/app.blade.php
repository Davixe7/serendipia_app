<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="/img/icons/favicon.svg">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Chivo:300,400,700" rel="stylesheet">
</head>
<body>
  <div id="app">
    @include('partials.sidenav')
    <div class="custom-navbar">
      <a href="/" class="custom-navbar-brand"><img src="/img/logos/logo-serendipia-leaf.svg" alt=""></a>
      <span class="page-title">{{ $page_title }}</span>
      <div class="ml-auto">
        <span class="address">Chapinero <span class="detail">Calle 62 # 3 - 18 / 24</span></span>
        <a href="/separar-apartamento/seleccionar-piso" class="btn btn-reserve-yours">Separa el tuyo</a>
        <button class="sidenavToggler sidenav-toggler">
          <span class="sidenav-toggler-icon"></span>
        </button>
      </div>
    </div>
    <main>
      @yield('content')
    </main>
    @yield('footer')
  </div>
  <!-- <script src="https://unpkg.com/vue-cool-lightbox"></script>
  <link rel="stylesheet" media="all" href="https://unpkg.com/vue-cool-lightbox/dist/vue-cool-lightbox.min.css" /> -->
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('script')
</body>
</html>
