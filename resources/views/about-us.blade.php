<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>Quiénes somos | Serendipia</title>
    <link rel="icon" href="/img/icons/favicon.svg">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <style>
      .picture-disclaimer {
        display: block;
        font-size: 8px;
        color: #19191c;
        text-align: center;
        opacity: .4;
      }
    </style>
  </head>
  <body>
    <div id="app">
      @include('partials.sidenav')
      <div id="about">
        <div class="modal-top">
          <div class="custom-navbar">
            <a class="custom-navbar-brand" href="/">
              <img src="/img/logos/logo-serendipia-leaf.svg" alt="">
            </a>
            <span class="page-title">Quiénes somos</span>
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
        </div>
        
        <div class="banner-about">
          <div class="col-md-6 mx-auto">
            Serendipia es tu mejor oportunidad de invertir en un apartamento de calidad en una zona exclusiva
          </div>
        </div>
        
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 offset-md-3">
                <h2>¿Qué es Serendipia?</h2>
                <p>
                  Hoy en día la tendencia de viviendas de calidad con buen diseño en zonas exclusivas de manera asequible se está llevando a las grandes ciudades alrededor del mundo y Bogotá no se queda atrás.
                </p>
                <p>
                  Serendipia es un espacio creado para todos los amantes del lujo y la elegancia de manera asequible. Su ubicación estratégica en uno de los sectores más exclusivos de la capital lo convierten en el lugar perfecto para jóvenes y extranjeros que deseen ser parte de una comunidad que disfruta de la experiencia de interactuar con su entorno, a través de la magia del diseño de sus espacios.
                </p>
              </div>
              <div class="col-md-3">
                <div class="quote">
                  <div class="content">
                    <p>Acontecimiento<br> afortunado<br> que surge de<br> manera inesperada,<br> y hace que tu vida<br> nunca sea igual.</p>
                    <img src="/img/icons/quotation-mark.svg" alt="" style="width: 34px; top: 0; left: 0;">
                    <img src="/img/icons/quotation-mark.svg" alt="" style="width: 34px; bottom: 8px; right: 40px; transform: rotateZ(180deg);">
                  </div>
                  <span class="title">Serendipia</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-10 offset-md-2">
                <img src="/img/group-17.jpg" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 offset-md-3">
                <h2>¿Qué es coliving?</h2>
                <p>
                  La nueva manera de vivir basada en los espacios compartidos, la comunidad y la colaboración. El coliving es la tendencia que está arrasando el sector inmobiliario alrededor del mundo, donde jóvenes profesionales, estudiantes y/o visitantes extranjeros disfrutan de la experiencia de ser parte de una comunidad que permite conocer gente nueva y establecer relaciones interpersonales favorables tanto para su vida personal como profesional en espacios que lo tienen todo, haciendo su camino a la independencia más fácil y divertido. 
                </p>
              </div>
              <div class="col-md-3">
                <div class="quote">
                  <div class="content">
                    <p>Estilo de vivienda moderno basado en los espacios compartidos, la comunidad y la colaboración.</p>
                    <img src="/img/icons/quotation-mark.svg" alt="" style="width: 34px; top: 0; left: 0;">
                    <img src="/img/icons/quotation-mark.svg" alt="" style="width: 34px; bottom: 8px; right: 40px; transform: rotateZ(180deg);">
                  </div>
                  <span class="title">Coliving</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-10 offset-md-2">
                <img src="/img/group-17.jpg" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <h2>¿Por qué invertir en Serendipia?</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae purus sagittis, bibendum lorem volutpat, ornare justo. Cras eget urna quis augue efficitur laoreet non non dui. Mauris vitae congue justo. Integer sit amet finibus ex, sed mattis purus. Duis dapibus eleifend urna ac gravida. Nulla facilisi. Nunc eget gravida leo. Curabitur dignissim felis sem, eget laoreet arcu tempus quis. Sed vestibulum ante in tincidunt congue. Praesent at mauris pretium, venenatis ante sit amet, varius enim. Fusce non leo ornare nulla placerat gravida ac vel quam. Donec venenatis egestas leo vel ornare. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce interdum massa quis velit aliquam, vitae viverra sem viverra. Maecenas et ligula eu diam scelerisque varius vel vitae felis. Duis sed dignissim magna, in vestibulum nulla. Sed gravida auctor eros et molestie. Morbi dapibus, eros et convallis placerat, lacus quam mollis ipsum, a lacinia lacus nunc a urna. Pellentesque nec tortor in neque venenatis scelerisque eu a nulla. Cras ut volutpat ante, eu egestas magna. Duis placerat commodo porta. Maecenas commodo eget nulla et blandit. Etiam vitae cursus diam, et dapibus ante.
                </p>
              </div>
            </div>
            <div class="row mb-0">
              <div class="col-md-8 mx-auto">
                <div class="ad-banner">
                  <div class="row align-items-center">
                    <div class="col-md-4 title">
                      ¡Invierte en el tuyo!
                    </div>
                    <div class="col-md-5 caption pl-md-0">
                      Comienza tu inversión en línea y recibe <span class="no-wrap">beneficios adicionales para tu apartamento.</span>
                    </div>
                    <div class="col-md-3 text-md-right">
                      <a href="{{ route('reserve.selectFloor') }}" class="btn btn-success">
                        Separa el tuyo
                      </a>
                    </div>
                  </div>
                </div>
                
                <div class="secure-payment-advice">
                  <img src="/img/lock.png" alt="" class="mr-2">
                  <span class="mr-3">Tus pagos están protegidos con</span>
                  <img src="/img/logos/logo-payu.png" alt="">
                </div>
                
                <div class="picture-disclaimer">
                  Las imágenes acá contenidas son una representación gráfica del diseñador y están sujetas a cambio en cuanto a diseño, acabados o materiales por disposición del grupo constructor o la curaduría correspondiente.
                </div>
              </div>
            </div>
          </div>
        </div>
          
        <footer style="background: #19191c; padding: 20px 40px;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-6 col-md-4 mb-4 footer-brand">
                <img src="/img/logos/logo-serendipia-footer.svg" alt="Serendipia" style="margin-right: 24px;">
                <div class="d-none d-sm-inline-block">
                  Chapinero &nbsp;
                </div>
                <div class="d-none d-sm-inline-block">
                  <span class="address">Calle 62 #3 - 18 / 24</span>
                </div>
              </div>
              
              <div class="col-6 col-md-4 order-sm-2 mb-4 d-flex justify-content-end align-items-center text-right">
                <ul class="sidenav-socials d-inline-block">
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
              
              <div class="col-md-12 d-sm-none mb-4 text-center">
                Chapinero <span class="address">Calle 62 #3 - 18 / 24</span>
              </div>
              
              <div class="col col-md-4 mx-auto footer-logos">
                <div class="footer-logo-wrap">
                  <span class="caption">Un proyecto:</span>
                  <a href="https://www.fores.com.co/"><img src="/img/logos/logo-fores.png" alt=""></a>
                </div>
                <div class="footer-logo-wrap">
                  <span class="caption">Diseño por:</span>
                  <a href="#"><img src="/img/logos/logo-hma.svg" alt=""></a>
                </div>
                <div class="footer-logo-wrap">
                  <span class="caption">Fiduciaria:</span>
                  <a href="#"><img src="/img/logos/logo-accion-fiduciaria.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
        
      </div>
    </div>
  </body>
</html>