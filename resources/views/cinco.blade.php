@extends('layouts.app')
@section('content')
<div id="cinco">
  <div class="container">
    <div class="row shared-sections-cards">
      <div class="shared-section-card">
        <img src="/img/icons/baking.svg" alt="">
        <span class="title">
          Cooking Lounge
        </span>
        <div class="description">
          ¿Cansado de los planes de siempre? Nuestro cooking lounge es perfecto para salir de la rutina. Prepara deliciosos platos y sorprender a tus invitados mientras disfrutan del aire libre.
        </div>
        <div class="measures">
          <div>
            <span class="measure-title">
              Ubicación
            </span>
            <div class="measure">
              Piso 1
            </div>
          </div>
          <div>
            <span class="measure-title">
              Altura libre:
            </span>
            <div class="measure">
              3,50m
            </div>
          </div>
        </div>
        <span class="measure-title">
          Incluye:
        </span>
        <span class="description">
          Estufa y horno eléctrico	Lavaplatos y gabinetes	Barra tipo isla
        </span>
      </div>
      <div class="shared-section-card">
        <img src="/img/icons/coffee.svg" alt="">
        <span class="title">
          Coffee Place
        </span>
        <div class="description">
          Un buen día comienza con una sonrisa y un buen café, por eso nuestro coffee place es ideal para que inicies tu día con la mayor energía disfrutando de un café en compañía
        </div>
        <div class="measures">
          <div>
            <span class="measure-title">
              Ubicación
            </span>
            <div class="measure">
              Piso 1
            </div>
          </div>
          <div>
            <span class="measure-title">
              Altura libre:
            </span>
            <div class="measure">
              3,50m
            </div>
          </div>
        </div>
        <span class="measure-title">
          Incluye:
        </span>
        <span class="description">
          Máquina de café y espumador. Vajilla básica cafetería, Lavaplatos 
        </span>
      </div>
      <div class="shared-section-card">
        <div style="height: 70px; display: flex; align-items: center;">
          <img src="/img/icons/gym.svg" alt="">
        </div>
        <span class="title">
          Gimnasio
        </span>
        <div class="description">
          ¿Sin tiempo para ir al gimnasio? Tendrás los beneficios de un gym sin salir de tu hogar, disponible las 24 horas; y lo mejor: podrás disfrutar de la ciudad desde otra perspectiva.
        </div>
        <div class="measures">
          <div>
            <span class="measure-title">
              Ubicación
            </span>
            <div class="measure">
              Piso 9
            </div>
          </div>
          <div>
            <span class="measure-title">
              Altura libre:
            </span>
            <div class="measure">
              3,50m
            </div>
          </div>
        </div>
        <span class="measure-title">
          Incluye:
        </span>
        <span class="description">
          Trotadoras, elípticas, bicicleta estática, set de pesas, balones de yoga, colchonetas y espejo.
        </span>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
  @include('partials.footer')
  <style>
    #cinco {
      background: url('/img/aptos/areas/cinco@3x.jpg');
      background-size: cover;
    }
    .shared-sections-cards {
      align-items: center;
      justify-content: center;
      min-height: calc(100vh - 170px);
    }
    .shared-section-card {
      flex: 0 1 auto;
      max-width: 250px;
      color: #fff;
      padding: 24px;
      -webkit-backdrop-filter: blur(2px);
      backdrop-filter: blur(2px);
      background-color: rgba(0, 0, 0, 0.8);
      margin-right: 31px;
    }
    .shared-section-card img {
      margin-bottom: 16px;
    }
    .shared-section-card .title {
      display: block;
      font-size: 20px;
      font-weight: bold;
      line-height: normal;
      letter-spacing: normal;
      color: #f2f2f7;
      margin-bottom: 10px;
    }
    .shared-section-card .description {
      font-size: 14px;
      font-weight: 300;
      line-height: 1.57;
      letter-spacing: normal;
      color: #fff;
      margin-bottom: 12px;
    }
  </style>
@endsection