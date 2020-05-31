@extends('layouts.app')
@section('content')
<div id="reserve-yours-floor" class="reserve-container">
  <div class="d-sm-none text-right py-3">
    <button class="btn btn-outline-default btn-sm" @click="selectByImage = !selectByImage">
      @{{ selectByImage ? 'Volver a lista' : 'Ver imagen' }}
    </button>
  </div>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 switchable-column px-0" :class="{active:selectByImage}">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 742 720">
          <defs>
            <image id="photo" width="742" height="720" xlink:href="/img/building.jpg"/>
            <polygon id="floor07-path" points="562.603,304.058 203.615,242.577 203.7,156.548 563.061,230.303 "/>
            <polygon id="floor06-path" points="563.061,367 203.615,317 203.615,242.577 562.603,304.058 "/>
            <polygon id="floor05-path" points="563.061,427 203.615,391 203.615,316.577 563.061,367 "/>
            <polygon id="floor04-path" points="563.061,490 203.615,466 203.615,391.576 563.061,426 "/>
            <polygon id="floor03-path" points="563.061,555 203.615,538 203.615,466.576 563.061,490 "/>
            <polygon id="floor02-path" points="563.061,606.333 203.615,598 203.615,538.576 563.061,554 "/>
          </defs>
          <use xlink:href="#photo"/>
          <a 
             v-for="floor in floors"
             :id="`floor${floor.floor}`"
             :href="`/separar-apartamento/seleccionar-apartamento/?floor=${floor.floor}`"
             :class="{active:activeFloor == floor.floor, disabled: floor.available < 1 }"
             @mouseover="activeFloor = floor.floor">
            <title>Piso 0@{{floor.floor}}</title>
            <use class="hover-path" :xlink:href="`#floor0${floor.floor}-path`"/>
          </a>
        </svg>
        <div class="help-text">
          Selecciona un piso en la imagen
        </div>
      </div>
      <div class="col-md-6 switchable-column px-0" :class="{active:!selectByImage}">
        <ul class="floors-list">
          <li v-for="(floor,n) in floors" :class="{active:activeFloor==floor.floor, disabled:floor.available < 1}" @mouseover="if(floor.available){activeFloor = floor.floor}">
            <div>
              <span class="floor-name">Piso @{{ floor.floor }}</span>
              <span v-if="floor.available" class="floor-available">@{{ floor.available }} apartamentos disponibles</span>
              <span v-else="floor.available" class="floor-available">No disponible</span>
            </div>
            <span v-if="floor.available" class="action">
              <span class="arrow arrow-right-green"></span>
              <a :href="`/separar-apartamento/seleccionar-apartamento/?floor=${floor.floor}`" class="btn btn-outline-success align-items-center">
                <div>Explorar piso</div>
                <div class="ml-3">
                  <span class="arrow-right-green"></span>
                </div>
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
    floors: {!! json_encode( $floors ) !!},
    activeFloor: null,
    selectByImage: true,
  }},
  computed:{
    availableFloors(){
      return this.floors.map(f=> f.floor )
    }
  }
})
</script>
@endsection