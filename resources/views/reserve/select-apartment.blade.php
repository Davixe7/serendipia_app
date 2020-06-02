@extends('layouts.app')
@section('content')
<div id="reserve-yours-apt" class="reserve-container">
  <div class="d-sm-none d-flex align-items-center py-4">
    <span class="floor-title">
      <span class="arrow-back-green"></span>
      Piso {{ $floor }}
    </span>
    <button class="btn btn-outline-default btn-sm ml-auto" @click="selectByImage = !selectByImage">
      @{{ selectByImage ? 'Volver a lista' : 'Ver imagen' }}
    </button>
  </div>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 switchable-column px-0" :class="{active:selectByImage}">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 520 504">
          <defs>
            <image id="photo" width="520px" height="504px" xlink:href="/img/seleccionar-apartamento.jpg"/>
            <rect id="apt1-path" x="72.957" y="397.127" width="186.755" height="52.533"/>
            <rect id="apt2-path" x="72.957" y="321.916" width="99.304" height="75.211"/>
            <rect id="apt3-path" x="72.957" y="246.707" width="99.304" height="75.209"/>
            <polygon id="apt4-path" points="178.248,209.707 178.227,187.375 112.048,187.475 112.048,198.759 72.957,198.775 72.957,246.707 238.361,246.707 238.361,209.451   "/>
            <polygon id="apt5-path" points="111.677,198.107 111.677,186.822 178.05,186.723 178.071,209.055 238.361,209.139 238.361,149.389 72.471,149.389 72.471,198.139   "/>
            <polygon id="apt6-path" points="177.991,110.207 177.97,87.875 111.791,87.975 111.791,99.259 72.7,99.275 72.7,147.207 238.104,147.207 238.104,109.951   "/>
            <polygon id="apt7-path" points="112.163,96.844 112.163,85.56 178.536,85.46 178.557,107.791 238.847,107.875 238.847,48.125 72.957,48.125 72.957,96.875   "/>
            <rect id="apt8-path" x="266.043" y="48.125" width="128.668" height="70.083"/>
            <rect id="apt9-path" x="266.293" y="118.208" width="128.668" height="69.167"/>
            <polygon id="apt10-path" points="394.961,256.875 283.211,256.875 266.293,249.875 266.293,187.375 394.961,187.375   "/>
            <polygon id="apt11-path" points="413.943,305.594 413.943,294.31 345.711,294.21 345.668,316.834 283.711,316.625 283.711,256.875 454.247,256.875 454.247,305.625   "/>
            <polygon id="apt12-path" points="454.247,353.209 283.711,353.209 283.711,316.625 352.711,316.642 352.711,293.907 414.044,293.975 414.044,305.475 454.247,305.542   "/>
            <polygon id="apt13-path" points="345.813,390.209 345.834,412.54 414.202,412.44 414.202,401.156 454.586,401.141 454.586,353.209 283.711,353.209 283.711,390.464   "/>
            <polygon id="apt14-path" points="414.202,401.156 414.202,412.44 345.834,412.54 345.813,390.209 283.711,390.125 283.711,449.875 454.586,449.875 454.586,401.125   "/>
          </defs>
          <use xlink:href="#photo"/>
          <a v-for="(apt,n) in apartments"
             :id="`apt${n}`"
             :xlink:href="`/seleccionar-apartamento/${apt.id}/detalles`"
             :class="{active:activeApt == n, disabled:!apt.available}"
             @mouseover="activeApt = n">
            <title>Apartamento @{{apt.number}}</title>
            <use class="hover-path" :xlink:href="`#apt${n+1}-path`"/>
          </a>
        </svg>
        <div class="help-text">
          Selecciona un apartamento en la imagen
        </div>
      </div>
      
      <div class="col-md-6 switchable-column px-0" :class="{active:!selectByImage}">
        <div class="floors-list-header">
          <span class="floor-title">
            <a href="{{ route('reserve.selectFloor') }}"><span class="arrow-back-green"></span></a>
            Piso {{ $floor }}
          </span>
        </div>
        <ul class="floors-list" style="flex-flow: column;">
          <li
            v-for="(apt,n) in apartments"
            :class="{active: activeApt==n, disabled: !apt.available}"
            @mouseover="if( apt.available ){ activeApt = n }">
            <div>
              <span class="floor-name">Apto @{{ apt.number }}</span>
              <span v-if="apt.available" class="floor-available">
                @{{ apt.type.built_area }} m<sup>2</sup> – $ @{{ apt.finance_value }}
              </span>
              <span v-else class="floor-available">No disponible</span>
            </div>
            <span v-if="apt.available" class="action">
              <a :href="`/separar-apartamento/${apt.id}/detalle`" class="arrow arrow-right-green"></a>
              <a :href="`/separar-apartamento/${apt.id}/detalle`" class="btn btn-outline-success align-items-center">
                <div>Ver detalles</div>
                <span class="ml-3 arrow-right-green"></span>
              </a>
            </span>
          </li>
        </ul>
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
    apartments: {!! json_encode( $apartments ) !!},
    activeApt: null,
    selectByImage: true,
  }},
})
</script>
@endsection