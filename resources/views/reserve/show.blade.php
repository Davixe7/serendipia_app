@extends('layouts.app')
@section('content')
<div id="reserve-yours-final" class="reserve-container">
  <div class="d-sm-none d-flex py-3 align-items-center">
    <span class="floor-title">
      <span class="arrow-back-green"></span>
      Apartamento {{$apartment->number}}
    </span>
    <button class="btn btn-outline-success btn-sm ml-auto" data-toggle="modal" data-target="#detail-modal">
      Plano detallado
    </button>
  </div>
  <div class="row">
    <div class="col-md-6 apartment-detail-plane">
      <img src="/img/aptos/separar/APTO_{{$apartment->type->id}}.png" alt="" style="max-width: 100%;">
    </div>
    <div class="col-md-6">
      <div class="floors-list-header">
        <span class="floor-title">
          <a href="{{ route('reserve.selectApartment', ['floor'=>$apartment->floor]) }}">
            <span class="arrow-back-green"></span>
          </a>
          <span>Apartamento {{$apartment->number}}</span>
        </span>
        <button class="btn btn-outline-success btn-sm ml-auto" data-toggle="modal" data-target="#detail-modal">
          Plano detallado
        </button>
      </div>
      <div class="px-4">
        <hr>
      </div>
      <div class="flex-column">
        <div class="checkout-card-item pb-0">
          <div class="apartment-measures">
            <div>
              <div class="measure-title">Área construida</div>
              <div class="measure">{{ $apartment->type->built_area }} m <sup>2</sup></div>
            </div>
            <div>
              <div class="measure-title">Área privada</div>
              <div class="measure">{{$apartment->type->private_area}} m <sup>2</sup></div>
            </div>
            <div>
              <div class="measure-title">Valor del apartamento</div>
              <div class="measure">{{$apartment->apt_value}}</div>
            </div>
            <div>
              <div class="measure-title">Altura libre</div>
              <div class="measure">2,50m</div>
            </div>
          </div>
          <hr>
        </div>
        <div class="checkout-card-bottom">
          <div class="includes checkout-card-item">
            <div class="measure-title" style="color:#fff;">Dotación incluída</div>
            <ul class="apartment-includes">
              <li>Estufa eléctrica</li>
              <li>Extractor</li>
              <li>Comedor 2 puestos</li>
              <li>Escritorio</li>
              <li>Clóset</li>
              <li>Cama sencilla</li>
              <li>Baño dotado</li>
              <li class="hl">Horno microondas</li>
              <li class="hl">Nevera</li>
              <li class="hl">TV de 40 pulgadas</li>
            </ul>
            <div class="online-promo">
              * Beneficios disponibles haciendo reserva en línea
            </div>
            <hr class="d-sm-none">
          </div>
          <div class="finances checkout-card-item">
            <div class="measure-title text-white">Financiación</div>
            <table>
              <tr>
                <td>Separación</td>
                <td>$10'000.000</td>
              </tr>
              <tr>
                <td>Cuota inicial</td>
                <td>40,0%</td>
              </tr>
              <tr>
                <td>Plazo</td>
                <td>{{$apartment->instalment}} meses</td>
              </tr>
              <tr>
                <td>Cuota mensual</td>
                <td>$ {{$apartment->monthly_quota}} </td>
              </tr>
              <tr>
                <td>Fecha entrega</td>
                <td>Sept. 2022</td>
              </tr>
              <tr>
                <td>Valor a financiar</td>
                <td>$ {{ $apartment->finance_value }}</td>
              </tr>
            </table>
            <div class="cta-card">
              <div class="text"><b>¡Sepáralo ahora con $10’000.000</b> y recibe tu apartamento con los beneficios adicionales!</div>
              <div class="d-flex align-items-center">
                <img src="/img/logos/logo-payu.png" alt="">
                <a href="#" class="btn btn-checkout ml-auto">Separar ahora</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Plano-->
<div class="modal fade" id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="plane-modalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background: none;">
      <div class="modal-header">
        <span class="ml-auto close-white" data-dismiss="modal"></span>
      </div>
      <div class="modal-body" style="background: #f2f2f7;">
        <img :src="`/img/aptos/planos/PLANO_${apartment.type_id}.png`" alt="" style="max-width: 100%;">
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
  @include('partials.footer')
@endsection

@section('script')
<script>
const app = new Vue({
  el: '#app',
  data(){return{
    apartment: {!! json_encode( $apartment ) !!},
  }},
})
</script>
@endsection