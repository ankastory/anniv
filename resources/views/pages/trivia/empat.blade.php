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
          <h5>4 dari 6</h5>
        </div>
        <div class="card card-question-four col-10">
          <p>
            Ada satu hal selain dirimu yang aku cintai terlebih dulu, sepak bola 
            namanya. Dan menonton pertandingan bola bersama denganmu adalah
            salah satu momen favoritku, baik menonton dari TV ataupun 
            langsung di stadion.     
            <strong>
              Pertandingan apakah yang kita tonton bersama pertama kali?
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
                href="#correct"
              >
                Final Piala Dunia 2018
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
                Indonesia U-19 VS UEA
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
                Indonesia U-19 VS Jepang
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
                Asian Games (Indonesia vs UEA)
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
              <strong>Final Piala Dunia 2018</strong> adalah pertandingan pertama dimana
              kamu menemaniku saat menontonnya. Sebenarnya, rencana hari itu hanyalah
              pergi ke kampus untuk menyelesaikan program KKP bersama kelompokmu. 
              Beruntung, program itu bisa selesai lebih cepat dari yang dibayangkan. 
              Lalu kita memutuskan untuk berjalan ke parkiran kampus karena ada nobar disana. 
              Dengan beralaskan aspal dan beratapkan langit malam, kita duduk berdampingan
              menonton pertandingan. Sebelum malam itu, sepak bola adalah hal paling
              indah. Namun ternyata kamu jauh lebih indah. Dan menonton pertandingan sepak 
              bola bersamamu adalah kemewahan yang tak ternilai harganya.
            </p>
          </div>
          <form action="{{ route('trivia4') }}" method="POST">
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
             <strong>Final Piala Dunia 2018</strong> adalah pertandingan pertama dimana
              kamu menemaniku saat menontonnya. Sebenarnya, rencana hari itu hanyalah
              pergi ke kampus untuk menyelesaikan program KKP bersama kelompokmu. 
              Beruntung, program itu bisa selesai lebih cepat dari yang dibayangkan. 
              Lalu kita memutuskan untuk berjalan ke parkiran kampus karena ada nobar disana. 
              Dengan beralaskan aspal dan beratapkan langit malam, kita duduk berdampingan
              menonton pertandingan. Sebelum malam itu, sepak bola adalah hal paling
              indah. Namun ternyata kamu jauh lebih indah. Dan menonton pertandingan sepak 
              bola bersamamu adalah kemewahan yang tak ternilai harganya.
            </p>
          </div>
          <form action="{{ route('trivia4') }}" method="POST">
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