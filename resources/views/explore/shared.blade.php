@extends('layouts.app')
@section('content')
<div id="shared">
  <div class="viewport">
    <span class="viewport-item-title-wrap" v-if="currentItem.slug">
      <span class="viewport-item-title">@{{ currentItem.name }}</span>
      <span class="ml-auto text-right">
        <a v-if="currentItem.slug != 'lavanderia'" :href="threeSixtyUrl + currentItem.scene" target="_blank" class="btn-details ml-auto mb-2">Explorar 360</a>
        <a href="#" class="btn-details" data-toggle="modal" data-target="#detail-modal">Detalle</a>
      </span>
    </span>
    <div class="viewport-screen">
      <div v-if="currentItem.slug" id="shared-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
          <div v-for="(item,n) in items" :key="n" class="carousel-item" :class="{active: currentIndex == n+1}">
            <picture @click="lightboxIndex=n">
              <source media="(min-width: 1367px), (min-height: 854px)" :srcset="`/img/aptos/areas/${item.slug}@3x.png`">
              <source media="(min-width: 576px), (min-height: 738px) and orientation(landscape)" :srcset="`/img/aptos/areas/${item.slug}@2x.jpg`">
              <img :src="`/img/aptos/areas/${item.slug}@1x.jpg`" alt="">
            </picture>
          </div>
        </div>
      </div>
      <div style="display: none;" :class="{'d-none': currentIndex != 5}" v-show="currentIndex == 5">
        @include('cinco')
      </div>
    </div>
    <div class="viewport-details-box" v-if="currentItem.slug" style="width: 320px;">
      <shared-details-box :item="currentItem"/>
    </div>
    <div class="bottom-shade"></div>
  </div>
  
  <vue-cool-lightbox 
    :items="pictures" 
    :index="lightboxIndex"
    @close="lightboxIndex = null">
  </vue-cool-lightbox>
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
    lightboxIndex: null,
    items: [
      {
        "scene"       : "scene_coworking",
        "name"        : "Coworking",
        "description" : "En nuestro coworking podrás disfrutar de un espacio donde la creatividad y la productividad son los mejores aliados.",
        "location"    : "Piso 1",
        "freeHeight"  : "3,50 m",
        "img"         : "coworking@3x.png",
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
        "img"         : "salonjuego@3x.png",
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
        "img"         : "skylounge@3x.png",
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
        "img"         : "lavanderia@3x.png",
        "slug"        : "lavanderia",
        "included"    : [
          "Máquinas de lavada y secado", "Mobiliario", "Ambientación del lugar"
        ]
      },
      {
        "name": ''
      }
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
    pictures(){
      return this.items.map(item=>{
        return item.img ? `/img/aptos/areas/${item.img}` : ''
      })
    },
    currentItem(){
      if( this.currentIndex != 5 ){
        return this.items[ this.currentIndex - 1]
      }
      return {"name": ''}
    },
    onLastFloor(){
      return this.currentIndex == this.items.length
    }
  },
})

</script>

<style>
  #cinco {
    padding: 20px 0;
    background: url('/img/aptos/areas/5@3x.png');
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
    margin-bottom: 20px;
    text-align: left !important;
  }
  .shared-section-card img {
    margin-bottom: 16px;
    max-width: 100%;
    width: 56px !important;
    height: auto;
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