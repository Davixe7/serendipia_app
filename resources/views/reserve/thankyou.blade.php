<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>Gracias | Serendipia</title>
    <link rel="icon" href="/img/icons/favicon.svg">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      #thankyou .card {
        padding: 24px;
        background: #f2f2f7;
      }
      #thankyou .card-header,
      #thankyou .card-body,
      #thankyou .card-footer {
        background: #f2f2f7;
        padding: 0;
      }
      #thankyou .card-header img {
        margin-bottom: 14px;
      }
      #thankyou .card-body {
        padding-top: 15px;
      }
      #thankyou .btn {
        margin-bottom: 24px;
      }
      .vph-100 {
        min-height: calc(100vh - 173px);
      }
      .thankyou-title {
        display: block;
        font-size: 20px;
        font-weight: bold;
        line-height: normal;
        letter-spacing: normal;
        color: #19191c;
        margin-bottom: 20px;
      }
      .thankyou-caption {
        font-size: 14px;
        font-weight: 300;
        line-height: 1.57;
        letter-spacing: normal;
        color: #19191c;
      }
      .measures {
        display: flex;
      }
      .measure {
        margin-right: 32px;
      }
      .measure-title {
        font-size: 12px;
        font-weight: bold;
        line-height: normal;
        letter-spacing: normal;
        color: #19191c;
      }
      .number {
        font-size: 20px;
        font-weight: 300;
        line-height: normal;
        letter-spacing: normal;
        color: #19191c;
      }
      .apartment-thumbnails {
        list-style-type: none;
        margin: 0 0 20px 0;
        padding: 20px 0 0 0;
        display: flex;
        align-items: center;
      }
      .apartment-thumbnails img {
        width: 88px;
        height: 88px;
        margin-right: 16px;
      }
    </style>
  </head>
  <body>
    <div id="app">
      @include('partials.sidenav')
      <div class="custom-navbar">
        <a class="custom-navbar-brand" href="/">
          <img src="/img/logos/logo-serendipia-leaf.svg" alt="">
        </a>
        <div class="custom-navbar-nav ml-auto">
          <div class="mr-4 d-none d-sm-block">
            <span class="address">
              <span class="white">Chapinero</span>
              Calle 62 #3 - 18 / 24
            </span>
          </div>
          <div class="sidenavToggler">
            <span class="sidenav-toggler-icon"></span>
          </div>
        </div>
      </div>
      <div id="thankyou">
        <div class="container-fluid">
          <div class="row vph-100 align-items-center">
            <div class="col-md-6 mx-auto">
              <div class="card">
                <div class="card-header">
                  <img src="/img/logos/logo-serendipia-black.svg" alt="">
                </div>
                <div class="card-body">
                  <span class="thankyou-title">
                    ¡Felicitaciones por tu gran inversión!
                  </span>
                  <p class="thankyou-caption">La reserva en línea de tu nuevo apartamento <b>{{ $apartment->number }}</b> fue completada con éxito. Recibirás toda la información detallada en tu correo electrónico.</p>
                  <!-- <button class="btn btn-outline-success d-flex align-items-center">
                    <span>Descargar comprobante</span>
                    <span class="arrow-down-green ml-3"></span>
                  </button> -->
                </div>
                <div class="card-footer">
                  <ul class="apartment-thumbnails">
                    <li>
                      <img src="/img/pic01.jpg" alt="">
                    </li>
                    <li>
                      <img src="/img/pic02.jpg" alt="">
                    </li>
                    <li>
                      <img src="/img/pic03.jpg" alt="">
                    </li>
                  </ul>
                  <div class="measures">
                    <div class="measure">
                      <span class="measure-title">Área construída</span>
                      <span class="number">{{ $apartment->built_area }} m<sup>2</sup></span>
                    </div>
                    <div class="measure">
                      <span class="measure-title">Área privada</span>
                      <span class="number">{{ $apartment->private_area }} m<sup>2</sup></span>
                    </div>
                    <div class="measure">
                      <span class="measure-title">Valor del apartamento</span>
                      <span class="number">$ {{ $apartment->apt_value }}</span>
                    </div>
                    <div class="measure">
                      <span class="measure-title">Altura libre</span>
                      <span class="number">2,50 m</span>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="custom-footer d-flex">
        @include('partials.footer-logos')
      </div>
    </div>