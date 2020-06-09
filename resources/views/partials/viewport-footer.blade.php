@extends('partials.footer')
@section('tabs-nav')
@if( $page_title == 'Explorar Apartamentos')
<div class="viewport-tabs-nav">
  <a href="/explorar-apartamentos/renders" :class="{active:activeNav=='renders'}">Renders</a>
  <a href="/explorar-apartamentos/planos" :class="{active:activeNav=='planos'}">Planos</a>
</div>
@endif
@endsection

@section('slides-nav')
  <div style="flex: 1 0 auto; display: flex; justify-content: center; align-items: center;">
    @include('partials.slides-nav')
  </div>
@endsection

@section('mobile-slides-nav')
<div class="text-center d-block d-lg-none" style="padding: 24px;">
  @include('partials.slides-nav')
</div>
@endsection