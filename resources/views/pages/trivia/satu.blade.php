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
          <h5>1 dari 6</h5>
        </div>
        <div class="card card-question col-10">
          <p>
            Salah satu kegiatan yang paling sering kita lakuin selama 3 tahun adalah
            nonton bioskop. Sudah 34 judul film yang kita tonton bersama hingga 
            sekarang. Tapi yang paling berkesan buatku adalah momen pertama saat
            kita duduk bersampingan pada baris kedua dari layar. 
            <strong>
              Judul film apakah yang kita tonton saat itu?
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
                autocomplete="off"
              >
                Pengabdi Setan
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
                autocomplete="off"
              >
                Milly & Mamet
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
                autocomplete="off"
              >
                Hotel Mumbai
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
                autocomplete="off"
              >
                Guardians of the Galaxy Vol.2
              </button>
            </div>
          </div>
        </div>
        <div class="collapse collapse-answer" id="correct">
          <div class="card card-answer col-10 justify-content-center">
            <img 
              src="{{ url('frontend/images/icons/ic_check@2x.png') }}" 
              alt=""
              width="80"
              height="80"
            >
            <h3>Correct!</h3>
            <p>
              <strong>Guardians of the Galaxy Vol. 2</strong> adalah film pertama yang kita saksikan 
              bersama. Sabtu malam tanggal 29 April 2017, di salah satu mall
              daerah Bintaro, kamu mengalah dengan menuruti kemauanku untuk
              menonton film itu. Aku senang ternyata kamu menikmati film 
              pilihanku, meskipun bukan salah satu genre kesukaanmu. Dan yang
              membuatku makin senang, malam itu, banyak cerita keluar dari mulut kita,
              bahkan baru berhenti saat aku mengantarmu pulang ke rumah. Untuk
              pertama kalinya. 
            </p>
          </div>
          <form action="{{ route('trivia1') }}" method="POST">
            @csrf
            <input 
              type="hidden"
              name="status"
              value=1
            >
            <button type="submit" class="btn btn-next">
              Next Question
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
              <strong>Guardians of the Galaxy Vol. 2</strong> adalah film pertama yang kita saksikan 
              bersama. Sabtu malam tanggal 29 April 2017, di salah satu mall
              daerah Bintaro, kamu mengalah dengan menuruti kemauanku untuk
              menonton film itu. Aku senang ternyata kamu menikmati film 
              pilihanku, meskipun bukan salah satu genre kesukaanmu. Dan yang
              membuatku makin senang, malam itu, banyak cerita keluar dari mulut kita,
              bahkan baru berhenti saat aku mengantarmu pulang ke rumah. Untuk
              pertama kalinya. 
            </p>
          </div>
          <form action="{{ route('trivia1') }}" method="POST">
            @csrf
            <input 
              type="hidden"
              name="status"
              value=0
            >
            <button type="submit" class="btn btn-next">
              Next Question
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
      sessionStorage.setItem('collapseItem', $(this).attr('href'));
      $(no1).attr('disabled', 'disabled');
    });

    var collapseItem = sessionStorage.getItem("collapseItem"); 
    if (collapseItem) {
      $(collapseItem).collapse('show');
    }
       
  </script>
@endpush