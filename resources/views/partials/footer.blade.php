<div class="custom-footer">
  @yield('tabs-nav')
  <span class="picture-disclaimer">
    Las imágenes acá contenidas son una representación gráfica del diseñador y están sujetas a cambio en cuanto a diseño, acabados o materiales por disposición del grupo constructor o la curaduría correspondiente.
  </span>
  @yield('slides-nav')
  @include('partials.footer-logos')
</div>

@yield('mobile-slides-nav')

<div class="custom-mobile-footer">
  <div>
    <div class="d-sm-none mb-4">
      <a href="{{ route('reserve.selectFloor') }}" class="btn btn-reserve-yours">Separa el tuyo</a>
    </div>
    <span class="picture-disclaimer">
      Las imágenes acá contenidas son una representación gráfica del diseñador y están sujetas a cambio en cuanto a diseño, acabados o materiales por disposición del grupo constructor o la curaduría correspondiente.
    </span>
  </div>
  <div class="wa-me">
    <img src="/img/whatsapp.png" alt="">
  </div>
</div>