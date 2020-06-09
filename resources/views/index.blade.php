<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="icon" href="/img/icons/favicon.svg">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Chivo:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
<div id="index">
  @include('partials.sidenav')
  
  <div id="navbar" class="custom-navbar">
    <a class="custom-navbar-brand index" href="/"><img src="/img/logos/logo-serendipia.svg" alt="logo serendipia"></a>
    <div class="ml-auto d-inline-flex align-items-center">
      <a href="#" class="btn btn-reserve-yours mr-4">
        Separa el Tuyo
      </a>
      <div class="sidenavToggler">
        <span class="sidenav-toggler-icon"></span>
      </div>
    </div>
  </div>
  
  <section id="carousel">
    @include('partials.home-carousel')
  </section>
  
  <div class="container main">
    <section class="feature" id="feature-1">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6">
          <img src="/img/apartamento-07.jpg" alt="" style="width: 100%;">
        </div>
        <div class="col-md-4">
          <h2>Apartamentos diseñados milimétricamente para que tu estadía en casa sea agradable</h2>
          <p>Cada metro cuadrado está pensado para maximizar tu inversión.</p>
          <a href="{{ route('explore.renders') }}" class="btn btn-outline btn-outline-success">Explorar apartamentos</a>
        </div>
      </div>
    </section>
    
    <section class="feature" id="feature-2">
      <div class="row flex-md-row-reverse">
        <div class="col-md-1 d-none d-sm-block "></div>
        <div class="col-md-6" style="position: relative;">
          <picture>
            <source media="(min-width:1366px)" srcset="/img/home/home-zonas-sociales@3x.jpg">
            <source media="(min-width:576px)" srcset="/img/home/home-zonas-sociales@2x.jpg">
            <img src="/img/home/home-zonas-sociales.jpg" alt="" style="width: 100%;">
          </picture>
          <a
            href="/zonas-sociales-360"
            class="btn btn-outline-default btn-explore-360">
            Explorar en 360°
          </a>
        </div>
        <div class="col-md-4">
          <h2>Zonas sociales pensadas para que no te falte nada y tengas una vida productiva</h2>
          <p>Sabemos que hoy en día el tiempo en casa es lo más importante.</p>
          <a href="{{ route('shared') }}" class="btn btn-outline btn-outline-success">
            Ver zonas sociales
          </a>
        </div>
      </div>
    </section>
    
    <div class="ad-banner">
      <div class="col-lg-10 mx-auto">
        <div class="row align-items-center">
          <div class="col-lg-4 title">
            ¡Invierte en el tuyo!
          </div>
          <div class="col-lg-5 caption pl-lg-0">
            Comienza tu <b>inversión en línea</b> y recibe <span class="no-wrap">beneficios adicionales para tu apartamento.</span>
          </div>
          <div class="col-lg-3 text-md-right">
            <a href="{{ route('reserve.selectFloor') }}" class="btn btn-success">
              Separa el tuyo
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="d-none d-sm-flex secure-payment-advice">
      <img src="/img/icons/lock.png" class="mr-2" alt="">
      <span class="mr-3">Tus pagos están protegidos con</span>
      <img src="/img/logos/logo-payu.png" alt="">
    </div>
    
    <span class="text-center picture-disclaimer">Las imágenes acá contenidas son una representación gráfica del diseñador y están sujetas a cambio en cuanto a diseño, acabados o materiales por disposición del grupo constructor o la curaduría correspondiente.</span>
  </div>
  
  
  <!-- Pre-Footer -->
  <div class="container-fluid prefooter">
    <div class="row">
      <div class="col-md-6 hover-box" style="background: url('/img/home/home-sitios-cercanos.jpg');background-size: cover;">
        <div class="overlay"></div>
        <div class="content">
          <h2>Sitios cercanos</h2>
          <p>Explora la ubicación estratégica de Serendipia.</p>
          <a href="{{ route('near') }}" class="btn btn-sm btn-outline">Ver sitios cercanos</a>
        </div>
      </div>
      <div class="col-md-6 hover-box" style="background: url('/img/home/home-quienes-somos.jpg');background-size: cover;">
        <div class="overlay"></div>
        <div class="content">
          <h2>¿Quiénes somos?</h2>
          <p>Aprende sobre el concepto detrás de serendipia y nuestra visión</p>
          <a href="{{ route('about') }}" class="btn btn-sm btn-outline">Conoce más</a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  <footer>
    <div class="custom-app-footer">
      <div class="col-6 col-lg-4 mb-4 footer-brand">
        <img src="/img/logos/logo-serendipia-footer.svg" alt="Serendipia" style="margin-right: 24px;">
        <span class="address"><span class="white">Chapinero</span> Calle 62 #3 - 18 / 24</span>
      </div>
      
      <div class="col-6 col-lg-4 order-lg-2 mb-4 footer-socials">
        <ul class="sidenav-socials">
          <li>
            <a target="_blank" href="https://www.instagram.com/serendipiaflats/?hl=es-la">
              <span class="instagram-icon"></span>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://www.facebook.com/Serendipia-111088827252397/?modal=admin_todo_tour">
              <span class="facebook-icon"></span>
            </a>
          </li>
        </ul>
      </div>
      
      <div class="col-12 d-lg-none mb-4 text-center">
        <span class="address"><span class="white">Chapinero</span> Calle 62 #3 - 18 / 24</span>
      </div>
      
      <div class="col-12 col-lg-4 mx-auto footer-logos">
        <div class="footer-logo-wrap">
          <span class="caption">Un proyecto:</span>
          <a href="https://www.fores.com.co/"><img src="/img/logos/logo-fores.png" alt=""></a>
        </div>
        <div class="footer-logo-wrap">
          <span class="caption">Diseño por:</span>
          <a href="http://hmaproyectos.com/"><img src="/img/logos/logo-hma.svg" alt=""></a>
        </div>
        <div class="footer-logo-wrap">
          <span class="caption">Fiduciaria:</span>
          <a href="https://www.accion.com.co/"><img src="/img/logos/logo-accion-fiduciaria.png" alt=""></a>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-nav">
            <span data-target="#modal-p1" class="btn btn-secondary btn-active">Serendipia</span>
            <span data-target="#modal-p2" class="btn btn-secondary">Coliving</span>
          </div>
        </div>
        <div class="modal-body">
          <div class="quote">
            <p id="modal-p1" class="d-block" >Acontecimiento afortunado<br> que surge de manera inesperada,<br> y hace que tu vida nunca sea igual.</p>
            <p id="modal-p2">Estilo de vivienda moderno basado en<br> los espacios<br> compartidos, la comunidad y la colaboración.</p>
            <img src="/img/icons/quotation-mark.svg" alt="" style="width: 34px; top: 0; left: 0;">
            <img src="/img/icons/quotation-mark.svg" alt="" style="width: 34px; bottom: 8px; right: 40px; transform: rotateZ(180deg);">
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <span class="fixed-whatsapp-btn">
    <a href="https://api.whatsapp.com/send?phone=+573174857023&text=Hola%21%20Quisiera%20obtener%20m%C3%A1s%20informaci%C3%B3n%20de%20Serendipia." target="_blank">
      <img src="/img/logos/whatsapp.png" alt="whatsapp" style="width: 40px; height: 40px;">
    </a>
  </span>
</div>
</div>  
<script>
  const modalNavLinks = document.querySelectorAll('.modal-nav span')
  const paragraphs = document.querySelector('.modal-body .quoute p')
  
  modalNavLinks.forEach((item, i) => {
    item.addEventListener('click', function(e){
      document.querySelector('.modal-nav .btn-active').classList.remove('btn-active');
      e.target.classList.add('btn-active');
      document.querySelector( '.quote p.d-block' ).classList.remove('d-block')
      document.querySelector( e.target.getAttribute('data-target') ).classList.add('d-block')          
    });
  });
</script>
</body>
</html>
