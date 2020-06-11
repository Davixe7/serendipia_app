<div class="custom-footer">
  <div class="first-block">
    @yield('tabs-nav')
    <span class="picture-disclaimer">
      Las imágenes acá contenidas son una representación gráfica del diseñador y están sujetas a cambio en cuanto a diseño, acabados o materiales por disposición del grupo constructor o la curaduría correspondiente.
    </span>
  </div>
  @yield('slides-nav')
  <div class="last-block">
    @include('partials.footer-logos')
  </div>
</div>

@yield('mobile-slides-nav')

<div class="custom-mobile-footer">
  <div>
    <div class="d-lg-none mb-4">
      <a href="{{ route('reserve.selectFloor') }}" class="btn btn-reserve-yours">Separa el tuyo</a>
    </div>
    <span class="picture-disclaimer">
      Las imágenes acá contenidas son una representación gráfica del diseñador y están sujetas a cambio en cuanto a diseño, acabados o materiales por disposición del grupo constructor o la curaduría correspondiente.
    </span>
  </div>
  <div class="wa-me">
    <a 
      target="_blank"
      href="https://api.whatsapp.com/send?phone=+573175323068&text=Hola%21%20Quisiera%20obtener%20m%C3%A1s%20informaci%C3%B3n%20de%20Serendipia.">
      <img src="/img/logos/whatsapp.png" alt="">
    </a>
  </div>
</div>