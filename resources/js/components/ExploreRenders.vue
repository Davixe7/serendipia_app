<template>
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
        <ViewportDetailsBox :type="type"/>
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
          <ViewportDetailsBox :type="type"/>
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
</template>

<script>
export default {
  props: 'type',
  methods:{
    onFloor(floor){
      return this.type.available_in.includes(floor)
    }
  }
}
</script>