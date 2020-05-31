<div class="viewport-slides-nav">
  <span class="move-left arrow-left-white" @click="backFloor"></span>
  <div class="slides-indicator">
    @{{currentIndex}}/@{{ items.length }}
  </div>
  <span class="arrow-right-white move-right" @click="skipFloor"></span>
</div>