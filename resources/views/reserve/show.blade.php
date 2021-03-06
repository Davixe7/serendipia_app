@extends('layouts.app')
@section('content')
<div id="reserve-yours-final" class="reserve-container">
  <div class="d-sm-none d-flex py-3 align-items-center">
    <span class="floor-title">
      <a href="{{ route('reserve.selectApartment', ['floor'=>$apartment->floor]) }}">
        <span class="arrow-back-green"></span>
      </a>
      Apartamento {{$apartment->number}}
    </span>
    <button class="btn btn-outline-success btn-sm ml-auto" data-toggle="modal" data-target="#plane-modal">
      Plano detallado
    </button>
  </div>
  <div class="row">
    <div class="col-md-6 apartment-detail-plane">
      <img src="/img/aptos/separar/APTO_{{$apartment->type->id}}.png"
           alt=""
           style="max-width: 100%;"
           @click="lightboxIndex=0">
    </div>
    <div class="col-md-6">
      <div class="floors-list-header">
        <span class="floor-title">
          <a href="{{ route('reserve.selectApartment', ['floor'=>$apartment->floor]) }}">
            <span class="arrow-back-green"></span>
          </a>
          <span>Apartamento {{$apartment->number}}</span>
        </span>
        <button class="btn btn-outline-success btn-sm ml-auto" data-toggle="modal" data-target="#plane-modal">
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
              <div class="measure">@{{ apartment.type.built_area | asArea }} m <sup>2</sup></div>
            </div>
            <div>
              <div class="measure-title">Área privada</div>
              <div class="measure">@{{ apartment.type.private_area | asArea }} m <sup>2</sup></div>
            </div>
            <div>
              <div class="measure-title">Valor del apartamento</div>
              <div class="measure">$ @{{apartment.apt_value | asMoney }}</div>
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
              <li>Clóset</li>
              <li>Cama aprox. 1,40 m</li>
              <li>Baño dotado</li>
              <li class="hl">Microondas</li>
              <li class="hl">Nevera</li>
              <li class="hl">Televisor 42’’</li>
              <li class="hl">Comedor</li>
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
                <td>$10.000.000</td>
              </tr>
              <tr>
                <td>Cuota inicial</td>
                <td>{{ $apartment->initial_quota }}%</td>
              </tr>
              <tr>
                <td>Plazo</td>
                <td>{{$apartment->instalment}} meses</td>
              </tr>
              <tr>
                <td>Cuota mensual</td>
                <td>$ @{{ apartment.monthly_quota | asMoney }} </td>
              </tr>
              <tr>
                <td>Fecha entrega</td>
                <td>{{ $apartment->releases }}</td>
              </tr>
              <tr>
                <td>Valor a financiar</td>
                <td>$ @{{ apartment.finance_value | asMoney }}</td>
              </tr>
            </table>
            <div class="cta-card">
              <div class="text"><b>¡Sepáralo ahora con $10.000.000</b> y recibe tu apartamento con los beneficios adicionales!</div>
              <div class="d-flex align-items-center">
                <img src="/img/logos/logo-payu.png" alt="">
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
  
  <vue-cool-lightbox
    :items="pictures"
    :index="lightboxIndex"
    :fullScreen="true"
    :useZoomBar="true"
    @close="lightboxIndex = null"
  />
</div>

<!-- Modal Plano-->
<div class="modal fade" id="plane-modal" tabindex="-1" role="dialog" aria-labelledby="plane-modalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" style="background: none;">
      <div class="modal-header">
        <span class="ml-auto close-white" data-dismiss="modal"></span>
      </div>
      <div class="modal-body" style="background: #f2f2f7; transform: rotateZ(-90deg);">
        <img :src="`/img/aptos/planos/PLANO_${apartment.type_id}.png`" alt="" style="max-width: 100%;">
      </div>
    </div>
  </div>
</div>

<!-- Modal Plano-->
<div class="modal fade" id="terminos-modal" tabindex="-1" role="dialog" aria-labelledby="plane-modalTitle" aria-hidden="true" :disabled="validating">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" style="background: none;">
      <form @submit.prevent="validateForm">
        <div class="modal-body" style="background: #f2f2f7;">
          <h4>Estás a un paso de separar tu apartamento</h4>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="#">Tu nombre completo</label>
                <input type="text" class="form-control" :class="{'is-invalid': errors.name, disabled:validating}" placeholder="Nombres y Apellidos" v-model="name" required :disabled="validating">
                <span v-if="errors.name" class="invalid-feedback">@{{ errors.name[0] }}</span>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="#">Tu correo electrónico</label>
                <input type="email" class="form-control" :class="{'is-invalid': errors.email, disabled:validating}" placeholder="correo@mail.com" v-model="email" required :disabled="validating">
                <span v-if="errors.email" class="invalid-feedback">@{{ errors.email[0] }}</span>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="#">Tu número telefónico</label>
                <input type="tel" class="form-control" :class="{'is-invalid': errors.phone, disabled:validating}" placeholder="Celular" v-model="phone" required :disabled="validating">
                <span v-if="errors.phone" class="invalid-feedback">@{{ errors.phone[0] }}</span>
              </div>
            </div>
          </div>
          
          <hr>
          
          <div class="modal-text">
            <span class="terms-title">Términos y condiciones</span>
            <p>1. De no recibir el valor de la separación en la fecha establecida Formas y Espacios dispondrá automáticamente del inmueble de esta cotización 2. Una vez realizada la consignación o transferencia de la separación se dispone de ocho (8) días calendario para realizar el cierre de venta en la sala de negocios ubicada en la Diagonal 115ª 70f-29 en la ciudad de Bogota; de lo contrario Formas y Espacios dispondrá automáticamente del inmueble. 3. El área total construida incluye columnas, muros comunes y buitrones del inmueble. El área privada podrá tener variaciones menores por cambios estructurales. Ambas áreas son aproximadas y podrían tener variaciones menores durante la etapa de construcción. 4. Los precios cotizados podrían variar en cualquier momento. Esta cotización es válida únicamente por el inmueble cotizado. Su vigencia es válida solamente si el cliente manifiesta que va a realizar la separación del inmueble. 5. Entiendo y acepto que de realizar una separación sobre un inmueble de este proyecto estoy obligado a vincularme a la fiduciaria del proyecto. 6. Entiendo y acepto que mi vinculación efectiva está sujeta a la validación por parte de ACCION FIDUCIARIA en las listas de control SARLAFT. 7. Las dimensiones mínimas de los parqueaderos comunales y visitantes son de 2.20 M de ancho por 4.70 M de largo. 8. El valor total de esta cotización NO incluye parqueaderos ni deposito. 9. Al recibir esta cotización autorizo a Formas y Espacios al manejo de mi información personal dentro de sus bases de datos.
            </p>
          </div>
        </div>
        <div class="modal-footer d-flex align-items-center justify-content-end">
          <button type="submit" class="btn btn-success d-inline-flex align-items-center" :disabled="validating">
            Continuar a PayU
            <span class="spinner-border spinner-border-sm ml-2" v-show="validating"></span>
          </button>
        </div>
      </form>
      
      <form v-if="formFieldsNames" :action="formUrl" ref="hiddenForm" method="POST">
        <input v-for="(field,n) in formFields" :value="field" :name="n" type="hidden" :id="formFieldNames[n]">
      </form>
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
    lightboxIndex: null,
    apartment: {!! json_encode( $apartment ) !!},
    
    validating: false,
    
    name: '',
    email: '',
    phone: '',
    
    errors: {},
    formUrl: '',
    formFields: null,
    formFieldNames: ["a","b","c","d","e","f","g","h","i","j","k","l","n"],
    credentials: []
  }},
  computed:{
    formFieldsNames(){
      return this.formFields ? Object.keys(this.formFields) : []
    },
    pictures(){
      let pics = []
      pics.push( '/img/aptos/separar/APTO_' + this.apartment.type.id  + '.png')
      return pics
    }
  },
  filters:{
    asMoney(string){
      return string.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    },
    asArea(string){
      return string.toString().replace('.', ',')
    }
  },
  methods:{
    validateForm(){
      let data = {
        "email": this.email,
        "phone": this.phone,
        "name": this.name,
        "apartment": this.apartment.id
      }
      let config = {
        headers: {
          "X-Frame-Options": "deny"
        }
      }
      this.validating = true
      axios.post('/validate-checkout-form', data, config).then(response=>{
        this.formUrl = response.data.data.formUrl
        this.formFields = response.data.data.order
        this.credentials = response.data.data.credentials
        let that = this
        setTimeout(function(){
          that.$refs.hiddenForm.submit()
        },200)
        
      },errors=>{
        this.errors = errors.response.data.errors
      }).then(()=>{
        this.validating = false
      })
    }
  }
})
</script>
<style>
  label {
    display: block;
    font-size: 14px;
    font-weight: bold;
    line-height: 1.57;
    letter-spacing: normal;
    color: #0f0f10;
  }
  .form-control.disabled {
    opacity: .5;
  }
  #terminos-modal .terms-title {
    display: block;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: normal;
    text-transform: uppercase;
    color: #19191c; 
    margin-bottom: 10px;
  }
  #terminos-modal .form-control,
  #terminos-modal hr {
    border-color: #97979799;
  }
  #terminos-modal .form-control {
    border-radius: 0;
    background: #f2f2f7;
  }
  #terminos-modal hr {
    margin-top: 15px;
  }
  #terminos-modal .modal-dialog {
    max-width: 637px;
  }
  #terminos-modal .modal-text {
    max-height: 342px;
    overflow: auto;
  }
  #terminos-modal  h4 {
    font-size: 24px;
    font-weight: bold;
    line-height: 0.92;
    letter-spacing: normal;
    color: #0f0f10;
    margin-bottom: 15px;
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
  .btn-reserve-yours {
    display: none !important;
  }
  @media(min-width: 769px){
    .wa-me {
      position: relative;
    }
  }
</style>
@endsection