<div id="indexCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#indexCarousel" data-slide-to="0" class="active">01</li>
    <li data-target="#indexCarousel" data-slide-to="1" class="">02</li>
    <li data-target="#indexCarousel" data-slide-to="2" class="">03</li>
    <li data-target="#indexCarousel" data-slide-to="3" class="">04</li>
  </ol>
  <div class="custom-carousel-caption">
    <div>
      <h5>Mi lugar favorito es <span class="modal-toggler" data-toggle="modal" data-target="#exampleModal">Serendipia</span></h5>
      <p>Llega a Bogotá la oportunidad de tener apartamentos de calidad con todo lo que necesitas, en zonas exclusivas y al mejor precio.</p>
      <div class="actions">
        <a href="#" class="btn btn-outline mr-2">
          <span class="play-icon mr-1"></span>
          Ver video
        </a>
        <a href="{{ route('reserve.selectFloor') }}" class="btn btn-success">Separa el tuyo</a>
      </div>
    </div>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <picture>
        <source media="(min-width:1366px)" srcset="/img/aptos/renders/fachada@3x.png">
        <source media="(min-width:768px)"  srcset="/img/aptos/renders/fachada@2x.jpg">
        <source media="(min-width:480px)"  srcset="/img/aptos/renders/fachada@1.5x.jpg">
        <img class="d-block w-md-100" src="/img/aptos/renders/fachada@1.5x.jpg" alt="First slide">
      </picture>
    </div>
    <div class="carousel-item">
      <picture>
        <source media="(min-width:1366px)" srcset="/img/aptos/renders/apartamento01-left@3x.jpg">
        <source media="(min-width:768px)" srcset="/img/aptos/renders/apartamento01-left@2x.jpg">
        <source media="(min-width:480px)" srcset="/img/aptos/renders/apartamento01-left@1.5x.jpg">
        <img class="d-block w-md-100" src="/img/aptos/renders/apartamento01-left@1.5x.jpg" alt="First slide">
      </picture>
    </div>
    <div class="carousel-item">
      <picture>
        <source media="(min-width:1366px)" srcset="/img/aptos/renders/coworking@3x.jpg">
        <source media="(min-width:768px)" srcset="/img/aptos/renders/coworking@2x.jpg">
        <source media="(min-width:480px)" srcset="/img/aptos/renders/coworking@1.5x.jpg">
        <img class="d-block w-md-100" src="/img/aptos/renders/coworking@1x.jpg" alt="First slide">
      </picture>
    </div>
    <div class="carousel-item">
      <picture>
        <source media="(min-width:1366px)" srcset="/img/aptos/renders/skylounge@3x.jpg">
        <source media="(min-width:768px)" srcset="/img/aptos/renders/skylounge@2x.jpg">
        <source media="(min-width:480px)" srcset="/img/aptos/renders/skylounge@1.5x.jpg">
        <img class="d-block w-md-100" src="/img/aptos/renders/skylounge@1x.jpg" alt="First slide">
      </picture>
    </div>
  </div>
  <div class="carousel-arrow-down">
    <a href="#feature-1" class="down-scroller">
      <span class="arrow-down-icon"></span>
    </a>
  </div>
</div>