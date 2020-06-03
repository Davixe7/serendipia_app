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
                <img src="/img/logos/logo-pse.png" alt="">
                <button type="button" class="btn btn-checkout ml-auto" data-toggle="modal" data-target="#terminos-modal">
                  <img src="/img/icons/icon-lock.png" class="mr-2" alt="">
                  Separar ahora
                </button>
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

<!-- Modal Plano-->
<div class="modal fade" id="terminos-modal" tabindex="-1" role="dialog" aria-labelledby="plane-modalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" style="background: none;">
      <div class="modal-header">
        <span class="ml-auto close-white" data-dismiss="modal"></span>
      </div>
      <div class="modal-body" style="background: #f2f2f7;">
        <h4>Términos y condiciones</h4>
        <div class="modal-text">
          <p>1. De no recibir el valor de la separación en la fecha establecida Formas y Espacios dispondrá automáticamente del inmueble de esta cotización 2. Una vez realizada la consignación o transferencia de la separación se dispone de ocho (8) días calendario para realizar el cierre de venta en la sala de negocios ubicada en la Diagonal 115ª 70f-29 en la ciudad de Bogota; de lo contrario Formas y Espacios dispondrá automáticamente del inmueble. 3. El área total construida incluye columnas, muros comunes y buitrones del inmueble. El área privada podrá tener variaciones menores por cambios estructurales. Ambas áreas son aproximadas y podrían tener variaciones menores durante la etapa de construcción. 4. Los precios cotizados podrían variar en cualquier momento. Esta cotización es válida únicamente por el inmueble cotizado. Su vigencia es válida solamente si el cliente manifiesta que va a realizar la separación del inmueble. 5. Entiendo y acepto que de realizar una separación sobre un inmueble de este proyecto estoy obligado a vincularme a la fiduciaria del proyecto. 6. Entiendo y acepto que mi vinculación efectiva está sujeta a la validación por parte de ACCION FIDUCIARIA en las listas de control SARLAFT. 7. Las dimensiones mínimas de los parqueaderos comunales y visitantes son de 2.20 M de ancho por 4.70 M de largo. 8. El valor total de esta cotización NO incluye parqueaderos ni deposito. 9. Al recibir esta cotización autorizo a Formas y Espacios al manejo de mi información personal dentro de sus bases de datos.
          </p>
        </div>
      </div>
      <div class="modal-footer d-flex align-items-center justify-content-end">
        <a href="/separar-apartamento/gracias" class="btn btn-success">Continuar a PSE</a>
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
<style>
  #terminos-modal .modal-dialog {
    max-width: 637px;
  }
  #terminos-modal .modal-text {
    max-height: 342px;
    overflow: auto;
  }
  #terminos-modal  h4 {
    font-size: 16px;
    text-transform: uppercase;
    font-weight: 400;
  }
  #terminos-modal  p {
    font-size: 14px;
    font-weight: 300;
    line-height: 1.57;
    letter-spacing: normal;
    color: #19191c;
  }
  #terminos-modal .modal-body,
  #terminos-modal .modal-footer {
    padding: 16px 32px;
  }
  #terminos-modal .modal-footer {
    padding: 16px 32px;
    background: #f2f2f7;
  }
</style>
@endsection