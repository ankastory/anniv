@extends('layouts.app')
@section('title', 'Anka Story')

@section('content')

<main>
  <section class="section-smile-header">
    <div class="container">
      <div class="row">
        <div class="section-smile-header-title col-12 text-center">
          <h1>
            Salah satu hal yang tak pernah membuatku bosan
            <br>
            adalah senyummu. Sampai kapanpun nanti,
            <br>
            kuharap senyum manis itu tak pernah hilang atau berganti.
          </h1>
        </div>
      </div>
    </div>
  </section>
  <section class="section-smile-content">
    <div class="container">
      <div class="row">
        <div class="col text-center smile-title">
          <span class="title-first">Smile</span>
          <span class="title-second">Again</span>
        </div>
      </div>
      <div class="gallery">
        <div class="xzoom-container">
          <img 
            src="{{ url('frontend/images/smile/pic_all@2x.png') }}" 
            alt=""
            class="xzoom"
            id="xzoom-default"
            xoriginal="{{ url('frontend/images/smile/pic_all@2x.png') }}"
          >
        </div>
      </div>
      </div>
    </div>
  </section>
</main>

@endsection

@push('addon-script')
  <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 400,
        title: false,
        tint: '#333',
        xoffset: 10
      });
    });
  </script>
@endpush