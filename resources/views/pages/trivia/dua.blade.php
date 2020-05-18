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
          <h5>2 dari 6</h5>
        </div>
        <div class="card card-question col-10">
          <p>
            Semester 4 adalah titik awal dimana kita saling mengusahakan agar bisa
            satu kelas untuk semua mata kuliah. Banyak yang berhasil namun tidak 
            sedikit juga yang gagal karena berbagai alasan.    
            <strong>
              Berapakah jumlah kelas yang akhirnya bisa kita lewati 
              bersama-sama selama masa kuliah?
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
                22
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
                17
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
                20
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
                24
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
              Sejak semester tiga hingga wisuda,<strong> 20 kelas</strong> sudah kita lalui bersama.
              Mulai dari matkul perancangan basis data yang menjadi kelas pertama, hingga matkul 
              komunikasi publik dan presentasi yang menjadi penutup sebelum tugas akhir tiba. Ada rasa
              senang setiap kali kita bisa sekelas bersama, dari sekedar duduk bersampingan,
              bercanda sambil mendengar materi yang disampaikan, sampai kamu yang selalu membangunkanku 
              saat tertidur karena penjelasan dosen yang membosankan. Dan mungkin ingatan dan 
              kesenangan lainnya akan ikut menghampiri saat kamu melihat daftar 20 kelas dibawah ini
            </p>
            <table>
              <tr>
                <td>PBD</td>
                <td>TPSI</td>
                <td>Matriks</td>
                <td>Jarkom</td>
                <td>Enterpreneur</td>
              </tr>
              <tr>
                <td>IPBO</td>
                <td>SPK</td>
                <td>Pengamen</td>
                <td>SIM</td>
                <td>IJK</td>
              </tr>
              <tr>
                <td>RPL</td>
                <td>AITI</td>
                <td>SQL</td>
                <td>TIS</td>
                <td>Metris</td>
              </tr>
              <tr>
                <td>Moprog</td>
                <td>Statek</td>
                <td>IS</td>
                <td>MPPL</td>
                <td>KPP</td>
              </tr>
            </table>
          </div>
          <form action="{{ route('trivia2') }}" method="POST">
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
              Sejak semester tiga hingga wisuda,<strong> 20 kelas</strong> sudah kita lalui bersama.
              Mulai dari matkul perancangan basis data yang menjadi kelas pertama, hingga matkul 
              komunikasi publik dan presentasi yang menjadi penutup sebelum tugas akhir tiba. Ada rasa
              senang setiap kali kita bisa sekelas bersama, dari sekedar duduk bersampingan,
              bercanda sambil mendengar materi yang disampaikan, sampai kamu yang selalu membangunkanku 
              saat tertidur karena penjelasan dosen yang membosankan. Dan mungkin ingatan dan 
              kesenangan lainnya akan ikut menghampiri saat kamu melihat daftar 20 kelas dibawah ini
            </p>
            <table>
              <tr>
                <td>PBD</td>
                <td>TPSI</td>
                <td>Matriks</td>
                <td>Jarkom</td>
                <td>Enterpreneur</td>
              </tr>
              <tr>
                <td>IPBO</td>
                <td>SPK</td>
                <td>Pengamen</td>
                <td>SIM</td>
                <td>IJK</td>
              </tr>
              <tr>
                <td>RPL</td>
                <td>AITI</td>
                <td>SQL</td>
                <td>TIS</td>
                <td>Metris</td>
              </tr>
              <tr>
                <td>Moprog</td>
                <td>Statek</td>
                <td>IS</td>
                <td>MPPL</td>
                <td>KPP</td>
              </tr>
            </table>
          </div>
          <form action="{{ route('trivia2') }}" method="POST">
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