@extends('layouts.app')
@section('content')
<div id="explore">
  <div class="text-center d-block d-sm-none" style="padding: 24px;">
    <div class="viewport-tabs-nav">
      <a href="#">Renders</a>
      <a href="#" class="active">Planos</a>
    </div>
  </div>
  <div class="viewport">
    <span class="viewport-item-title-wrap">
      <span class="viewport-item-title">Tipo @{{ activeFloor }}</span>
      <a href="#" class="btn-details" data-toggle="modal" data-target="#detail-modal">Detalle</a>
    </span>
    <div class="viewport-screen">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
          <div v-for="n in 14" :key="n" class="carousel-item" :class="{active: activeFloor == n}">
            <picture>
              <source media="(min-width: 768px)" :srcset="`/img/aptos/explore/TIPO_${n}.png`">
              <img :src="`/img/aptos/separar/APTO_${n}.png`">
            </picture>
          </div>
        </div>
      </div>
    </div>
    <div class="viewport-details-box">
      <div class="measures">
        <span>
          <span class="measure-title">Área construida:</span>
          <span class="measure">18,95 m²</span>
        </span>
        <span>
          <span class="measure-title">Área privada</span>
          <span class="measure">2,50 m<sup>2</sup></span>
        </span>
        <span>
          <span class="measure-title">Altura libre</span>
          <span class="measure">18,95 m<sup>2</sup></span>
        </span>
      </div>
      <button class="btn btn-outline-default" data-toggle="modal" data-target="#plane-modal">Ver plano detallado</button>
      <hr>
      <span class="measure-title">Disponible en:</span>
      <div class="viewport-floors-list">
        <div v-for="n in 6">
          <div class="measure">
            Piso 0@{{n+1}} &nbsp;
            <span class="arrow-right-green"></span>
          </div>
        </div>
      </div>
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
        <div class="measures">
          <span>
            <span class="measure-title">Área construida:</span>
            <span class="measure">18,95 m²</span>
          </span>
          <span>
            <span class="measure-title">Área privada</span>
            <span class="measure">2,50 m<sup>2</sup></span>
          </span>
          <span>
            <span class="measure-title">Altura libre</span>
            <span class="measure">18,95 m<sup>2</sup></span>
          </span>
        </div>
        <button class="btn btn-outline-success" data-toggle="modal" data-target="#plane-modal">Ver plano detallado</button>
        <hr>
        <span class="measure-title">Disponible en:</span>
        <div class="viewport-floors-list">
          <div v-for="n in 6">
            <div class="measure">
              Piso 0@{{n+1}} &nbsp;
              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13">
                <g fill="none" fill-rule="evenodd" stroke="#00C232" stroke-width="1.185">
                  <path d="M5.833.5L5.833 16.5M.5 11.167L5.833 16.5 11.167 11.167" transform="matrix(0 1 1 0 .5 .5)"/>
                </g>
              </svg>
            </div>
          </div>
        </div>
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
        <img :src="`/img/aptos/planos/PLANO_${activeFloor}.png`" alt="">
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
const app = new Vue({
  el: '#app',
  data(){return{
    activeFloor: 1
  }},
  methods:{
    skipFloor(){
      this.onLastFloor ? this.activeFloor = 1 : this.activeFloor++
    },
    backFloor(){
      this.activeFloor == 1 ? this.activeFloor = 14 : this.activeFloor--
    }
  },
  computed:{
    activeRender(){
      return this.renders[ this.activeFloor - 1]
    },
    onLastFloor(){
      return this.activeFloor == 14
    }
  }
})
</script>
@endsection