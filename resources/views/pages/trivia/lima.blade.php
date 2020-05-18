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
          <h5>5 dari 6</h5>
        </div>
        <div class="card card-question col-10">
          <p>
            Sebulan sebelum sidang TA, kita setuju untuk tidak memberi hadiah di hari
            sidang kita. Namun, aku berjanji untuk memberimu satu hadiah jika nilai TA 
            yang kamu dapat adalah 'A'. Dan kamu berhasil mendapatkan nilai 88 
            yang setara dengan 'A'.     
            <strong>
              Hadiah apakah yang aku berikan padamu 2 hari setelah hari sidang kita?
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
                Traktir Bakmi Buncit
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
                href="#correct"
              >
                Traktir Pochajjang
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
                McFlurry + Paddle Pop Rainbow
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
                href="#wrong"
              >
                Sepatu Hitam
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
              Aku ingat kamu merasa takut tak bisa melalui sidang TA dengan lancar.
              Saat itu, kamu tidak yakin akan kemampuanmu bahkan pesimis bisa mendapatkan nilai 
              dengan grade tertinggi. Aku sengaja menjanjikan kamu hadiah berupa 
              <strong>Traktiran Pochajjang</strong> karena itu adalah hal yang sangat kamu
              inginkan saat itu. Dan aku berharap janjiku bisa membuat kamu menjadi lebih
              yakin dan optimis nilai 'A' dan predikat 'cumlaude' bisa kamu dapatkan.
              Hari sidang tiba, kamu pun berhasil melewatinya dan sukses mendapat nilai 'A'.
              Dua hari kemudian, aku memenuhi janjiku dan kita sangat menikmatinya. Meskipun
              keesokan hari, aku langsung merasa tidak enak badan. Mungkin karena 
              makanan ala Korea tidak cocok untukku, atau karena terlalu banyak daging
              yang masuk ke perutku. 
            </p>
          </div>
          <form action="{{ route('trivia5') }}" method="POST">
            @csrf
            <input 
              type="hidden"
              name="status"
              value={{ $jml+1 }}
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
              Aku ingat kamu merasa takut tak bisa melalui sidang TA dengan lancar.
              Saat itu, kamu tidak yakin akan kemampuanmu bahkan pesimis bisa mendapatkan nilai 
              dengan grade tertinggi. Aku sengaja menjanjikan kamu hadiah berupa 
              <strong>Traktiran Pochajjang</strong> karena itu adalah hal yang sangat kamu
              inginkan saat itu. Dan aku berharap janjiku bisa membuat kamu menjadi lebih
              yakin dan optimis nilai 'A' dan predikat 'cumlaude' bisa kamu dapatkan.
              Hari sidang tiba, kamu pun berhasil melewatinya dan sukses mendapat nilai 'A'.
              Dua hari kemudian, aku memenuhi janjiku dan kita sangat menikmatinya. Meskipun
              keesokan hari, aku langsung merasa tidak enak badan. Mungkin karena 
              makanan ala Korea tidak cocok untukku, atau karena terlalu banyak daging
              yang masuk ke perutku.
            </p>
          </div>
          <form action="{{ route('trivia5') }}" method="POST">
            @csrf
            <input 
              type="hidden"
              name="status"
              value={{ $jml }}
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
        $(no1).attr('disabled', 'disabled');
    });
  </script>
@endpush