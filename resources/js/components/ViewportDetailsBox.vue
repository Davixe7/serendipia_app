<template>
  <div>
    <div class="measures">
      <span>
        <span class="measure-title">Área construida:</span>
        <span class="measure">{{ type.builtArea }} m²</span>
      </span>
      <span>
        <span class="measure-title">Área privada</span>
        <span class="measure">{{ type.privateArea }} m<sup>2</sup></span>
      </span>
      <span>
        <span class="measure-title">Altura libre</span>
        <span class="measure">{{ type.freeHeight }} m<sup>2</sup></span>
      </span>
    </div>
    <button class="btn btn-outline-default" data-toggle="modal" data-target="#plane-modal">Ver plano detallado</button>
    <hr>
    <span class="measure-title">Disponible en:</span>
    <div class="viewport-floors-list">
      <div v-for="n in 6">
        <div class="measure" :class="{active: onFloor(n+1) }">
          Piso 0@{{n+1}} &nbsp;
          <span class="arrow-right-green"></span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  
}
</script>

<style lang="css" scoped>
</style>
