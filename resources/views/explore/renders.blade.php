@extends('layouts.app')
@section('content')
<div id="renders">
  <div class="text-center d-block d-sm-none" style="padding: 24px;">
    @if( $page_title == 'Explorar Apartamentos')
    <div class="viewport-tabs-nav">
      <a href="/explorar-apartamentos/renders" :class="{active:activeNav=='renders'}">Renders</a>
      <a href="/explorar-apartamentos/planos" :class="{active:activeNav=='planos'}">Planos</a>
    </div>
    @endif
  </div>
  <div class="viewport">
    <span class="viewport-item-title-wrap">
      <span class="viewport-item-title">@{{ currentItem.name }}</span>
      <a href="#" class="btn-details" data-toggle="modal" data-target="#detail-modal">Detalle</a>
    </span>
    <div class="viewport-screen">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
          <div v-for="n in 3" :key="n" class="carousel-item" :class="{active: currentIndex == n}">
            <picture>
              <source media="(min-width: 1366px)" :srcset="`/img/aptos/renders/${currentItem.imgx3}`">
              <source media="(min-width: 768px)" :srcset="`/img/aptos/renders/${currentItem.imgx2}`">
              <source media="(min-width: 480px)" :srcset="`/img/aptos/renders/${currentItem.imgx1_5}`">
              <img :src="`/img/aptos/renders/${currentItem.imgx1}`" class="w-md-100">
            </picture>
          </div>
        </div>
      </div>
    </div>
    <div class="viewport-details-box">
      <renders-details-box v-if="currentItem" :currentItem="currentItem"/>
    </div>
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
        <renders-details-box v-if="currentItem" :currentItem="currentItem"/>
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
Vue.component('renders-details-box', {
  props: ['currentItem'],
  methods:{
    onFloor(floor){
      if(this.currentItem.available_in){
        return this.currentItem.available_in.includes(floor)
      }
    }
  },
  template: `
  <div>
    <span class="measure-title">Electrodomésticos incluidos:</span>
    <ul class="apartment-includes">
      <li>Estufa eléctrica</li>
      <li>Horno microondas</li>
      <li>Extractor</li>
      <li>Nevera</li>
    </ul>
    
    <span class="measure-title">Mobiliario incluido:</span>
    <ul class="apartment-includes">
      <li>1 Escritorio</li>
      <li>Comedor de 2 puestos</li>
      <li>Clóset</li>
      <li>1 Cama</li>
      <li>1 Baño completo</li>
    </ul>
  </div>
  `
})

const app = new Vue({
  el: '#app',
  data(){return{
    items: [],
    currentIndex: 1,
    activeNav: 'renders',
    items: [
      {
        name: 'Fachada',
        imgx1: 'fachada@1x.jpg',
        imgx2: 'fachada@2x.jpg',
        imgx3: 'fachada@3x.png',
        imgx1_5: 'fachada@1.5x.jpg',
      },
      {
        name: 'Apartamento',
        imgx1: 'apartamento02@1x.jpg',
        imgx2: 'apartamento02@2x.jpg',
        imgx3: 'apartamento02@3x.jpg',
        imgx1_5: 'apartamento0@1.5x.jpg',
      },
      {
        name: 'Apartamento',
        imgx1: 'apartamento01-center@1x.jpg',
        imgx2: 'apartamento01-center@2x.jpg',
        imgx3: 'apartamento01-center@3x.jpg',
        imgx1_5: 'apartamento01-center@1.5x.jpg',
      }
    ]
  }},
  methods:{
    skipFloor(){
      this.onLastFloor ? this.currentIndex = 1 : this.currentIndex++
      this.currentItem = this.items[ this.currentIndex - 1 ]
    },
    backFloor(){
      this.currentIndex == 1 ? this.currentIndex = this.items.length : this.currentIndex--
      this.currentItem = this.items[ this.currentIndex - 1 ]
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