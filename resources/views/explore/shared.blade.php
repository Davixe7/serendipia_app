@extends('layouts.app')
@section('content')
<div id="shared">
  <div class="viewport">
    <span class="viewport-item-title-wrap">
      <span class="viewport-item-title">@{{ currentItem.name }}</span>
      <span class="ml-auto">
        <a v-if="currentItem.slug != 'lavanderia'" :href="threeSixtyUrl + currentItem.scene" target="_blank" class="btn-details ml-auto">Explorar 360</a>
        <a href="#" class="btn-details" data-toggle="modal" data-target="#detail-modal">Detalle</a>
      </span>
    </span>
    <div class="viewport-screen">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
          <div v-for="(item,n) in items" :key="n" class="carousel-item" :class="{active: currentIndex == n+1}">
            <picture>
              <source media="(min-width:768px)" :srcset="`./img/aptos/areas/${currentItem.img}`">
              <img :src="`./img/aptos/areas/${currentItem.slug}@1x.jpg`" class="d-block">
            </picture>
          </div>
        </div>
      </div>
    </div>
    <div class="viewport-details-box" style="width: 320px;">
      <shared-details-box v-if="currentItem" :item="currentItem"/>
    </div>
    <div class="bottom-shade"></div>
  </div>
</div>

<!-- Modal Detalle-->
<div class="modal fade" id="detail-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="ml-auto close-white" data-dismiss="modal"></span>
      </div>
      <div class="modal-body">
        <shared-details-box v-if="currentItem" :item="currentItem"/>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
  @include('partials.viewport-footer')
@endsection

@section('script')
<script>
Vue.component('shared-details-box', {
  props: ['item'],
  template: `
  <div>
    <div class="area-description" style="max-height: ">
      @{{ item.description }}
    </div>
    <div class="measures">
      <div>
        <div class="measure-title">Ubicación</div>
        <div class="measure">@{{ item.location }}</div>
      </div>
      <div>
        <div class="measure-title">Altura libre:</div>
        <div class="measure">@{{ item.freeHeight }}</div>
      </div>
    </div>
    
    <span class="measure-title">Incluye:</span>
    <ul class="apartment-includes" style="display: flex; flex-flow: column wrap; max-height: 90px;">
      <li v-for="included in item.included">@{{ included }}</li>
    </ul>
    
    <a v-if="item.slug != 'lavanderia'" :href="'/zonas-sociales-360/?startscene=' + item.scene" target="_blank" class="btn btn-outline-default">Explorar en 360°</a>
  </div>
  `
})

const app = new Vue({
  el: '#app',
  data(){return{
    items: [
      {
        "scene"       : "scene_coworking",
        "name"        : "Coworking",
        "description" : "En nuestro coworking podrás disfrutar de un espacio donde la creatividad y la productividad son los mejores aliados.",
        "location"    : "Piso 1",
        "freeHeight"  : "3,50 m",
        "img"         : "coworking.jpg",
        "slug"        : "coworking",
        "included"    : [
          "Escritorios", "Sillas", "Ambientación del lugar"
        ]
      },
        {
        "scene" : "scene_juegos",
        "name"        : "Salón de juegos",
        "description" : "¿Una partida de ping-pong? ¿un torneo de futbolito? Nuestro salón de juegos cuenta con una variedad de juegos que podrás disfrutar en cualquier momento del día.",
        "location"    : "Piso 1",
        "freeHeight"  : "3,50 m",
        "img"         : "salonjuego.jpg",
        "slug"        : "salonjuego",
        "included"    : [
          "Televisor 50’’","Mesa Ping Pong","Mesa Futbolito","Mobiliario","Ambientación del lugar"
        ]
      },
      {
        "scene"       : "scene_terraza_comunal",
        "name"        : "Sky Lounge",
        "description" : "¿Cansado de los planes de siempre? Nuestro sky lounge es perfecto para salir de la rutina y tener una vista increíble de la ciudad. Celebra y disfruta con tus invitados en esta agradable zona.",
        "location"    : "Piso 1",
        "freeHeight"  : "3,50 m",
        "img"         : "skylounge.jpg",
        "slug"        : "skylounge",
        "included"    : [
          "Mobiliario", "Ambientación del lugar"
        ]
      },
      {
        "scene"       : "scene_terraza_comunal",
        "name"        : "Lavandería",
        "description" : "Mantener la ropa limpia es difícil viviendo sólo, por eso decidimos facilitar el proceso con nuestra lavandería autoservicio, administrada por la empresa Lavanti, a un precio razonable.",
        "location"    : "Piso 1",
        "freeHeight"  : "3,50 m",
        "img"         : "lavanderia.jpg",
        "slug"        : "lavanderia",
        "included"    : [
          "Máquinas de lavada y secado", "Mobiliario", "Ambientación del lugar"
        ]
      },
    ],
    currentIndex: 1,
    threeSixtyUrl: '/zonas-sociales-360/?startscene='
  }},
  methods:{
    skipFloor(){
      this.onLastFloor ? this.currentIndex = 1 : this.currentIndex++
    },
    backFloor(){
      this.currentIndex == 1 ? this.currentIndex = this.items.length : this.currentIndex--
    }
  },
  computed:{
    currentItem(){
      return this.items[ this.currentIndex - 1]
    },
    onLastFloor(){
      return this.currentIndex == this.items.length
    }
  },
})

</script>
@endsection