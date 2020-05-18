@extends('layouts.app')
@section('title', 'Anka Story')

@section('content')

<main>
  <div class="section-result-content align-items-center">
    <div class="col text-center">
      <img 
        src="{{ url('frontend/images/icons/ic_result@2x.png') }}" 
        alt=""
        class="img-fluid"
        width="200"
        height="200"
      >
      <h2>Congrats!</h2>
      <p>
        Kamu berhasil menjawab <strong> {{ $jml }} </strong> dari 6 
        pertanyaan dengan benar. 
        <br>
        Lihat hadiahmu!!!        
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 align-item-center">
          <div class="card card-coupon text-center">
            <h4>Kupon Anti Marah</h4>
            <center>
              <img 
                src="{{ url('frontend/images/icons/ic_angry@2x.png') }}" 
                alt=""
                width="150"
                height="150"
              >
            </center>
            <p>
              Kupon ini dapat digunakan saat aku sedang marah. Fungsinya
              agar marahku langsung berhenti seketika. Kupon ini hanya dapat
              digunakan satu kali
            </p>
            <hr>
            <h5>Berlaku sampai 23 Mei 2021</h5>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 align-item-center">
          <div class="card card-coupon text-center">
            <h4>Kupon Sehari Penuh</h4>
            <center>
              <img 
                src="{{ url('frontend/images/icons/ic_service@2x.png') }}" 
                alt=""
                width="150"
                height="150"
              >
            </center>
            <p>
              Kupon ini membuat kamu mendapat pelayanan sehari penuh.
              Permintaan apapun dan tujuan kemanapun akan dikabulkan.
              Kupon ini hanya berlaku satu kali
            </p>
            <hr>
            <h5>Berlaku sampai 23 Mei 2021</h5>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 align-item-center">
          <div class="card card-coupon text-center">
            <h4>Kupon Bebas Protes</h4>
            <center>
              <img 
                src="{{ url('frontend/images/icons/ic_protest@2x.png') }}" 
                alt=""
                width="150"
                height="150"
              >
            </center>
            <p>
              Kupon ini dapat digunakan saat kamu meminta, membeli, atau 
              melakukan sesuatu. Fungsinya agar aku tidak bisa memprotes 
              hal tersebut. Kupon ini hanya berlaku satu kali
            </p>
            <hr>
            <h5>Berlaku sampai 23 Mei 2021</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="col text-center">
      <a href="{{ route('home') }}" class="btn btn-home-page px-4 ">
        Home Page
      </a>
    </div>
  </div>
</main>

@endsection
