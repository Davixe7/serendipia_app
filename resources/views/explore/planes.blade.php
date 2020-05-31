@extends('layouts.app')
@section('content')
<div id="explore">
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
      <span class="viewport-item-title">Tipo @{{ currentIndex }}</span>
      <a href="#" class="btn-details" data-toggle="modal" data-target="#detail-modal">Detalle</a>
    </span>
    <div class="viewport-screen">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
          <div v-for="n in 14" :key="n" class="carousel-item" :class="{active: currentIndex == n}">
            <picture @click="lightboxIndex=1">
              <source media="(min-width: 768px)" :srcset="`/img/aptos/explore/TIPO_${n}.png`">
              <img :src="`/img/aptos/separar/APTO_${n}.png`">
            </picture>
          </div>
        </div>
      </div>
    </div>
    <div class="viewport-details-box">
      <planes-details-box v-if="type" :type="type"/>
    </div>
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
        <planes-details-box v-if="type" :type="type"/>
      </div>
    </div>
  </div>
</div>
<!-- Modal Plano-->
<div class="modal fade" id="plane-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="ml-auto close-white" data-dismiss="modal"></span>
      </div>
      <div class="modal-body">
        <img :src="`/img/aptos/planos/PLANO_${currentIndex}.png`" alt="">
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
Vue.component('planes-details-box', {
  props: ['type'],
  methods:{
    onFloor(floor){
      if(this.type.available_in){
        return this.type.available_in.includes(floor)
      }
    }
  },
  template: `
  <div>
    <div class="measures">
      <span>
        <span class="measure-title">Área construida:</span>
        <span class="measure">@{{ type.built_area }} m²</span>
      </span>
      <span>
        <span class="measure-title">Área privada</span>
        <span class="measure">@{{ type.private_area }} m<sup>2</sup></span>
      </span>
      <span>
        <span class="measure-title">Altura libre</span>
        <span class="measure">@{{ type.free_height }} m<sup>2</sup></span>
      </span>
    </div>
    <button class="btn btn-outline-default" data-toggle="modal" data-target="#plane-modal">Ver plano detallado</button>
    <hr>
    <span class="measure-title">Disponible en:</span>
    <div class="viewport-floors-list">
      <div v-for="n in 6" :class="{disabled: !onFloor(n+1) }">
        <div class="measure">
          Piso 0@{{n+1}} &nbsp;
          <span class="arrow-right-green"></span>
        </div>
      </div>
    </div>
  </div>
  `
})

const app = new Vue({
  el: '#app',
  data(){return{
    items: [],
    type: {},
    currentIndex: 1,
    activeNav: 'planos',
    pictures: [],
    lightboxIndex: null
  }},
  methods:{
    skipFloor(){
      this.onLastFloor ? this.currentIndex = 1 : this.currentIndex++
      this.type = this.items[ this.currentIndex - 1 ]
    },
    backFloor(){
      this.currentIndex == 1 ? this.currentIndex = 14 : this.currentIndex--
      this.type = this.items[ this.currentIndex - 1 ]
    }
  },
  computed:{
    activeRender(){
      return this.renders[ this.currentIndex - 1]
    },
    onLastFloor(){
      return this.currentIndex == 14
    }
  },
  mounted(){
    for(let i = 1; i < 15; i++){
      this.pictures.push('/img/aptos/explore/TIPO_'+i+'.png')
    }
    this.items = {!! json_encode($types)  !!}
    this.type = this.items[0]
  }
})

</script>
@endsection