<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>Sitios cercanos | Serendipia</title>
    <link rel="icon" href="/img/icons/favicon.svg">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/near.css') }}" rel="stylesheet">
    <style>
      .viewport-item-title .btn, .viewport-item-title .btn-group {
        font-size: 14px;
        display: inline-block;
        margin-left: auto;
      }

      .viewport-item-title .btn-group {
        padding: 0;
        border: none;
      }
      .viewport-item-title .btn-group .btn-outline {
        color: #f2f2f7;
      }
      .btn-group {
        border: 1px solid #fff;
        border-radius: none;
      }
      .btn-group .btn {
        font-size: 16px;
        letter-spacing: 0;
      }

      .btn-group .btn.active {
        background: #fff;
        color: #19191c;
      }

      .btn-group .btn:last-child {
        border-left: 1px solid #fff;
      }
      .modal-bottom {
        padding: 0px 24px;
      }
      @media(min-width: 768px){
        .modal-bottom {
          padding: 0px 40px
        }
      }
    </style>
  </head>
  <body>
    <div id="app">
      @include('partials.sidenav')
      <div id="near">
        <div class="modal-top">
          <div class="custom-navbar">
            <a class="custom-navbar-brand" href="/"><img src="/img/logos/logo-serendipia-footer.svg" alt=""></a>
            <span class="page-title">Sitios cercanos</span>
            <div class="custom-navbar-nav ml-auto">
              <div class="mr-4 d-none d-sm-block">
                <span class="address">
                  <span class="white">Chapinero</span>
                  Calle 62 #3 - 18 / 24
                </span>
              </div>
              <a href="{{ route('reserve.selectFloor') }}" class="mr-4 d-none d-sm-block btn btn-success">Separa el tuyo</a>
              <div class="sidenavToggler">
                <span class="sidenav-toggler-icon"></span>
              </div>
            </div>
          </div>
          
          <div class="d-sm-none py-3 text-center">
            <div class="btn-group">
              <a href="/sitios-cercanos" class="btn btn-default active">Sitios de interés</a>
              <a href="/mapa" class="btn btn-default">Mapa</a>
            </div>
          </div>
        </div>
        
        <div style="flex: 0 0 auto; padding: 0 40px;">
          <div class="row h-100">
            <div class="col-md-4">
              <div class="near-item">
                <picture>
                  <!-- <source media="(min-width:1367px)" srcset="/img/near/naturaleza@2x.jpg"> -->
                  <img src="/img/near/naturaleza.jpg" alt="">
                </picture>
                <div class="content">
                  <span class="title">Naturaleza</span>
                  <ul class="list">
                    <li>Parque Japón</li>
                    <li>Parque de Los Hippies</li>
                    <li>Quebrada La Vieja</li>
                    <li>Parque Los Rosales</li>
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="near-item modal-toggler">
                <img src="/img/rectangle-mapa.jpg" alt="">
                <div class="content" data-toggle="modal" data-target="#exampleModal">
                  <span class="title">Mapa de Ubicación</span>
                  <span class="icon zoom-icon"></span>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="near-item">
                <picture>
                  <source media="(min-width:1367px)" srcset="/img/near/educacion@2x.jpg">
                  <img src="/img/near/educacion.jpg" alt="">
                </picture>
                <div class="content">
                  <span class="title">Educación</span>
                  <ul class="list">
                    <li>Universidad Manuela Beltrán</li>
                    <li>Universidad Santo Tomás</li>
                    <li>Pontificia Universidad Javeriana</li>
                    <li>Universidad Piloto de Colombia</li>
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="near-item">
                <picture>
                  <source media="(min-width:1367px)" srcset="/img/near/restaurantes@2x.jpg">
                  <img src="/img/near/restaurantes.jpg" alt="">
                </picture>
                <div class="content">
                  <span class="title">Restaurantes y cafés</span>
                  <p>
                    Ubicado junto a la Zona G de Bogotá, famosa por su gran variedad de opciones gastronómicas de todos los sabores y todos los precios.
                  </p>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="near-item modal-toggler">
                <picture>
                  <source media="(min-width:1367px)" srcset="/img/near/vistarea@2x.jpg">
                  <img src="/img/near/vistarea.jpg" alt="">
                </picture>
                <div class="content" onclick="window.location.href='/get-360/?startscene=scene_location'">
                  <span class="title">Vista aérea</span>
                  <span class="icon zoom-icon"></span>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="near-item">
                <picture>
                  <source media="(min-width:1367px)" srcset="/img/near/centros-interes@2x.jpg">
                  <img src="/img/near/centros-interes.jpg" alt="">
                </picture>
                <div class="content">
                  <span class="title">Centros de Interés</span>
                  <ul class="list">
                    <li>Carulla Calle 63 y D1</li>
                    <li>Centro Comercial Avenida Chile</li>
                    <li>Zona Financiera</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Modal -->
          
          <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <span class="close-white" class="close" data-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="modal-body">
                  <img src="/img/mapa-modal.jpg" alt="#">
                </div>
              </div>
            </div>
          </div>
        </div>
          
        <!-- Bottom -->
        <div class="modal-bottom">
          <div class="d-none d-sm-block container-fluid">
            <div class="row">
              
              <div class="d-none d-sm-block col-sm-3 pl-0">
                <div class="btn-group">
                  <a href="/sitios-cercanos" class="btn btn-default active">Sitios de interés</a>
                  <a href="/mapa" class="btn btn-default">Mapa</a>
                </div>
              </div>
              
              <div class="col-6 col-sm-3">
                <span class="picture-disclaimer">
                  Las imágenes acá contenidas son una representación gráfica del diseñador y están sujetas a cambio en cuanto a diseño, acabados o materiales por disposición del grupo constructor o la curaduría correspondiente.
                </span>
              </div>
              
              <div class="col-12 col-sm-6 text-sm-right footer-logos">
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
                <div class="footer-logo-wrap whatsapp">
                  <a style="color: #fff;" href="https://api.whatsapp.com/send?phone=+573174857023&text=Hola%21%20Quisiera%20obtener%20m%C3%A1s%20informaci%C3%B3n%20de%20Serendipia.">
                    <img src="/img/whatsapp.png" alt="">
                  </a>
                </div>
              </div>
              
            </div>
          </div>
          <div class="container-fluid d-sm-none">
            <div class="custom-mobile-footer d-flex d-sm-none align-items-center">
              <div class="pr-4">
                <div class="mb-4">
                  <a href="{{ route('reserve.selectFloor') }}" class="btn btn-reserve-yours">Separa el tuyo</a>
                </div>
                <span class="picture-disclaimer">
                  Las imágenes acá contenidas son una representación gráfica del diseñador y están sujetas a cambio en cuanto a diseño, acabados o materiales por disposición del grupo constructor o la curaduría correspondiente.
                </span>
              </div>
              <div class="wa-me">
                <a href="https://api.whatsapp.com/send?phone=+573174857023&text=Hola%21%20Quisiera%20obtener%20m%C3%A1s%20informaci%C3%B3n%20de%20Serendipia.">
                  <img src="/img/whatsapp.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>