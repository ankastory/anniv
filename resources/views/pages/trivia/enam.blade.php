@extends('layouts.app')
@section('title', 'Anka Story')

@section('content')

<main>
  <section class="section-trivia-header">
    <div class="container">
      <div class="row">
        <div class="section-trivia-header-title col-12 text-center">
          <h1>
            Ada banyak detail dari setiap momen yang telah kita lalui. 
            <br>
            Tak ada salahnya untuk mengingat sekali lagi.
          </h1>
        </div>
      </div>
    </div>
  </section>
  <div class="section-trivia-content">
    <div class="container">
      <div class="row">
        <div class="col text-center trivia-title">
          <span class="title-first">Remember</span>
          <span class="title-second">Us?</span>
        </div>
      </div>
      <center>
        <div class="card card-number col-10 text-center">
          <h5>6 dari 6</h5>
        </div>
        <div class="card card-question col-10">
          <p>
            KFC Bintaro Sektor 9 menjadi saksi usaha kita dalam menyelesaikan Tugas 
            Akhir. Tiap minggu, bisa sekali sampai dua kali kita mengerjakan TA di
            tempat makan itu. Ada satu menu yang hampir selalu kita pesan dan
            menemani pengerjaan TA kita hingga selesai.      
            <strong>
              Menu KFC apakah itu? 
            </strong>
          </p>
        </div>
        <div class="section-card-answer row justify-content-center">
          <div class="col-10 col-sm-10 col-lg-5">
            <div class="card card-option text-center">
              <button 
                type="submit" 
                id="salah" 
                class="btn btn-option px-4"
                data-toggle="collapse"
                href="#wrong"
              >
                Colonel Yakiniku
              </button>
            </div>
          </div>
          <div class="col-10 col-sm-10 col-lg-5">
            <div class="card card-option text-center">
              <button 
                type="submit" 
                id="salah" 
                class="btn btn-option px-4"
                data-toggle="collapse"
                href="#wrong"
              >
                Fish Fillet
              </button>
            </div>
          </div>
          <div class="col-10 col-sm-10 col-lg-5">
            <div class="card card-option text-center">
              <button 
                type="submit" 
                id="salah" 
                class="btn btn-option px-4"
                data-toggle="collapse"
                href="#wrong"
              >
                Super Besar 1
              </button>
            </div>
          </div>
          <div class="col-10 col-sm-10 col-lg-5">
            <div class="card card-option text-center">
              <button 
                type="button" 
                id="benar" 
                class="btn btn-option px-4"
                data-toggle="collapse"
                href="#correct"
              >
               Zuper Box
              </button>
            </div>
          </div>
        </div>
        <div class="collapse collapse-answer" id="correct" >
          <div class="card card-answer col-10 justify-content-center">
            <img 
              src="{{ url('frontend/images/icons/ic_check@2x.png') }}" 
              alt=""
              width="80"
              height="80"
            >
            <h3>Correct!</h3>
            <p>
              Awal masa TA, kita kebingungan mencari tempat enak untuk mengerjakannya.
              Kelas dan lorong unit 7 yang menjadi basecamp kelompok kita saat KKP,
              sudah tidak lagi bersahabat. Ruang sekre organisasimu juga sudah tidak
              etis untuk dijadikan tempat kerja karena statusmu yang sudah bukan anggota.
              Rasa bingung kemudian memaksa kita untuk menjelajahi bintaro dan sekitarnya,
              hingga menemukan tempat nyaman di lantai atas KFC Sektor 9. Kamu yang lebih
              sering makan ayam goreng saingannya, sempat kesulitan memilih menu yang pas.
              Tapi lucunya, kamu juga yang menemukan menu andalan kita berdua,
              <strong>Zuper Box</strong> namanya. Menu itu yang akhirnya menjadi 
              salah satu teman yang selalu menemani kita, beserta Lychee Float yang
              menjadi teman lainnya.  
            </p>
          </div>
          <form action="{{ route('trivia-result') }}" method="POST">
            @csrf
            <input 
              type="hidden"
              name="status"
              value={{ $jml+1 }}
            >
            <button type="submit" class="btn btn-next">
              See Result
            </button>
          </form>
        </div>
        <div class="collapse collapse-answer" id="wrong" >
          <div class="card card-answer col-10 justify-content-center">
            <img 
              src="{{ url('frontend/images/icons/ic_cross@2x.png') }}" 
              alt=""
              width="80"
              height="80"
            >
            <h3>Incorrect!</h3>
            <p>
              Awal masa TA, kita kebingungan mencari tempat enak untuk mengerjakannya.
              Kelas dan lorong unit 7 yang menjadi basecamp kelompok kita saat KKP,
              sudah tidak lagi bersahabat. Ruang sekre organisasimu juga sudah tidak
              etis untuk dijadikan tempat kerja karena statusmu yang sudah bukan anggota.
              Rasa bingung kemudian memaksa kita untuk menjelajahi bintaro dan sekitarnya,
              hingga menemukan tempat nyaman di lantai atas KFC Sektor 9. Kamu yang lebih
              sering makan ayam goreng saingannya, sempat kesulitan memilih menu yang pas.
              Tapi lucunya, kamu juga yang menemukan menu andalan kita berdua,
              <strong>Zuper Box</strong> namanya. Menu itu yang akhirnya menjadi 
              salah satu teman yang selalu menemani kita, beserta Lychee Float yang
              menjadi teman lainnya.
            </p>
          </div>
          <form action="{{ route('trivia-result') }}" method="POST">
            @csrf
            <input 
              type="hidden"
              name="status"
              value={{ $jml }}
            >
            <button type="submit" class="btn btn-next">
              See Result
            </button>
          </form>
        </div>
        <div class="section-trivia-footer">
          <div class="container"></div>
        </div>
      </center>
    </div>
  </div>
</main>

@endsection

@push('addon-script')
  <script>
    var no1 =  $("#salah, #benar");

    $('button').on('click',function(e){
        var target=$(this).attr('href');
        $(target).show();
        $(no1).attr('disabled', 'disabled');
    });
  </script>
@endpush