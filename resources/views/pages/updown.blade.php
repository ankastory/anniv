@extends('layouts.app')
@section('title', 'Anka Story')

@section('content')
  
<main>
  <section class="section-updown-header">
    <div class="container">
      <div class="row">
        <div class="section-updown-header-title col-12 text-center">
          <h1>
            Sejak pertemuan itu, rasanya hari-hari menjadi berwarna.
            <br>
            Canda, tawa, rencana, perselisihan, dan sesekali amarah.  
            <br>
            Namun yang terpenting, tak ada kata menyerah. 
          </h1>
        </div>
      </div>
    </div>
  </section>
  <section class="section-updown-content">
    <div class="container">
      <div class="row">
        <div class="col text-center loveline-title">
          <span class="title-first">Love</span>
          <span class="title-second">Line</span>
        </div>
      </div>
      <div class="row">
        <ul class="timeline">
          <li>
            <div class="timeline-badge" style="margin-top: -68px;">
              <div class="timeline-text">
                29
                <br>
                Dec
                <br>
                2016
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Rasa itu Tumbuh</h4>
              </div>
              <div class="timeline-body">
                <p>
                  Setelah surprise yang kau berikan, aku tak
                  bisa lagi menganggapmu hanya teman
                  biasa. Sejak malam ini, aku yakin untuk
                  membuka lembaran baru dan meyakinkan
                  hati untukmu
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge">
              <div class="timeline-text">
                24
                <br>
                May
                <br>
                2017
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Jawaban yang Dinanti</h4>
              </div>
              <div class="timeline-body">
                <p>
                  5 bulan berlalu dan aku siap menyatakan
                  padamu. Tepat sebelum tanjakan menuju
                  rumahmu, pertanyaan itu dijawab olehmu.
                  Jawaban yang membuatku tersenyum,
                  begitupun kamu. Menjadi kita. 
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge">
              <div class="timeline-text">
                21
                <br>
                Jun
                <br>
                2017
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Buka Berdua</h4>
              </div>
              <div class="timeline-body">
                <p>
                  Aku baru bisa mewujudkan keinginanmu
                  agar kita buka bersama pada hari ini. Dan
                  Taman Jajan Bintaro menjadi tempat 
                  "kencan pertama" kita. Malam ini juga
                  menjadi momen pertemuan pertamaku
                  dengan mamamu.
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge">
              <div class="timeline-text">
                28
                <br>
                Aug
                <br>
                2017
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Tangis itu...</h4>
              </div>
              <div class="timeline-body">
                <div class="pic-inline">
                  <img 
                    src="{{ url('frontend/images/updown/tangis_1@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="tangis1"
                    width="205"
                    height="201"
                  />
                  <div id="picModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic1">
                  </div>

                  <div class="pic-margin"></div>
                  <img 
                    src="{{ url('frontend/images/updown/tangis_2@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="tangis2"
                    width="205"
                    height="201"
                  />
                  <div id="picModal2" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic2">
                  </div>
                </div>
                <p>
                  Aku melihat tangisan pertamamu malam
                  ini. Bukan karena kita bertengkar, tapi 
                  karena kau merasa tak mampu melalui
                  ujian. Namun aku senang, karena di pagi
                  harinya, aku kembali melihat wajahmu 
                  dengan senyuman. Lalu berhasil lulus ujian
                  yang kamu takutkan.
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge">
              <div class="timeline-text">
                27 - 29
                <br>
                Nov
                <br>
                2017
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Jatuh Kesekian Kali</h4>
              </div>
              <div class="timeline-body">
                <div class="pic-inline">
                  <img 
                    src="{{ url('frontend/images/updown/jatuh_1@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="jatuh1"
                    width="183"
                    height="181"
                  />
                  <div id="picModal3" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic3">
                  </div>

                  <div class="pic-margin"></div>
                  <img 
                    src="{{ url('frontend/images/updown/jatuh_2@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="jatuh2"
                    width="228"
                    height="181"
                  />
                  <div id="picModal4" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic4">
                  </div>
                </div>
                <p>
                  Hari ini ada yang berbeda darimu, pakaian
                  yang kamu kenakan dan rias wajah yang 
                  membuatmu menawan. Kulihat kamu telah
                  siap menjadi MC di event organisasimu.
                  Ketika acara dimulai dan kamu mulai
                  bicara, rasanya aku kembali jatuh hati
                  untuk kesekian kali.
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge">
              <div class="timeline-text-twoline">
                Dec - Jan
                <br>
                2018
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Our Birthday</h4>
              </div>
              <div class="timeline-body">
                <div class="pic-inline">
                  <img 
                    src="{{ url('frontend/images/updown/birthday_2@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="birthday1"
                    width="228"
                    height="181"
                    style="margin-top: 20px;"
                  />
                  <div id="picModal5" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic5">
                  </div>

                  <div class="pic-margin"></div>
                  <img 
                    src="{{ url('frontend/images/updown/birthday_1@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="birthday2"
                    width="183"
                    height="211"
                  />
                  <div id="picModal6" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic6">
                  </div>
                </div>
                <p>
                  Momen pertama ulang tahun yang kita 
                  lalui bersama. Aku lebih dulu bertambah
                  usia, lalu kamu 4 hari setelahnya. Tak ada
                  perayaan berlebihan, sebab menghabiskan
                  waktu seharian denganmu rasanya 
                  jauh lebih istimewa.
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge">
              <div class="timeline-text-twoline">
                Feb - Mar
                <br>
                2018
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Mengenal Lebih Jauh</h4>
              </div>
              <div class="timeline-body">
                <div class="pic-inline">
                  <div class="small-margin"></div>
                  <img 
                    src="{{ url('frontend/images/updown/jauh_1@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="jauh1"
                    width="228"
                    height="181"
                  />
                  <div id="picModal7" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic7">
                  </div>

                  <div class="pic-margin"></div>
                  <img 
                    src="{{ url('frontend/images/updown/jauh_2@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="jauh2"
                    width="202"
                    height="181"
                  />
                  <div id="picModal8" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic8">
                  </div>
                </div>
                <p>
                  Selama 2 bulan, ada dua acara yang 
                  membuat kamu lebih mengenal keluargaku.
                  Pertama, lamaran kakakku dan sebulan
                  kemudian adalah pernikahannya. Aku
                  senang melalui dua acara itu dengan 
                  kehadiranmu. Tapi aku jauh lebih senang
                  melihatmu bisa dekat dengan keluargaku.
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge">
              <div class="timeline-text">
                18
                <br>
                Jul
                <br>
                2018
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">KKP</h4>
              </div>
              <div class="timeline-body">
                <div class="pic-inline">
                  <div class="one-pic"></div>
                  <img 
                    src="{{ url('frontend/images/updown/kkp_1@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="kkp1"
                    width="183"
                    height="200"
                  />
                  <div id="picModal9" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic9">
                  </div>
                </div>
                <p>
                  Proses empat bulan yang kita lakukan
                  akhirnya berakhir dengan senyuman. 
                  Sidang KKP yang kita takutkan ternyata
                  mudah dilalui jika bersama. Dan yang lebih
                  membuatku bangga, kamu tak kalah
                  dengan tekanan sidang kedua. Nilai 'A'
                  yang kamu dapat adalah buktinya. Kamu
                  memang selalu memberi kejutan.
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge">
              <div class="timeline-text-twoline">
                Aug
                <br>
                2018
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Proses Dewasa</h4>
              </div>
              <div class="timeline-body">
                <div class="pic-inline">
                  <div class="small-margin"></div>
                  <img 
                    src="{{ url('frontend/images/updown/proses_1@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="proses1"
                    width="228"
                    height="200"
                  />
                  <div id="picModal10" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic10">
                  </div>

                  <div class="pic-margin"></div>
                  <img 
                    src="{{ url('frontend/images/updown/proses_2@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="proses2"
                    width="202"
                    height="200"
                  />
                  <div id="picModal11" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic11">
                  </div>
                </div>
                <p>
                  Bulan ini diawali dengan amarah yang 
                  saling meluap di antara kita. Rasa capek
                  yang melanda akhirnya membuat malam
                  yang seharusnya tenang menjadi sirna. 
                  Tapi sekali lagi, kita berhasil melalui proses
                  pendewasaan ini. Bahkan beberapa hari
                  setelahnya, kita mampu berjalan 2,6 km
                  menuju Curug Cibereum bersama-sama.
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge">
              <div class="timeline-text-twoline">
                Dec - Jan
                <br>
                2019
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Another Birthday</h4>
              </div>
              <div class="timeline-body">
                <div class="pic-inline">
                  <div class="large-margin"></div>
                  <img 
                    src="{{ url('frontend/images/updown/birthday_3@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="birthday3"
                    width="185"
                    height="211"
                  />
                  <div id="picModal12" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic12">
                  </div>

                  <div class="pic-margin"></div>
                  <img 
                    src="{{ url('frontend/images/updown/birthday_4@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="birthday4"
                    width="195"
                    height="211"
                  />
                  <div id="picModal13" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic13">
                  </div>
                </div>
                <p>
                  Tahun kedua kita melalui ulang tahun
                  bersama. Sama seperti tahun sebelumnya,
                  kita memilih untuk menghabiskan waktu
                  dengan seharian memutari Jakarta.
                  Berusaha Mencari boneka dan berakhir
                  dengan photobooth berdua.
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge">
              <div class="timeline-text-twoline">
                Feb - Mar
                <br>
                2019
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Sebulan Penuh</h4>
              </div>
              <div class="timeline-body">
                <div class="pic-inline">
                  <div class="small-margin"></div>
                  <img 
                    src="{{ url('frontend/images/updown/bulan_1@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="bulan1"
                    width="228"
                    height="200"
                  />
                  <div id="picModal14" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic14">
                  </div>

                  <div class="pic-margin"></div>
                  <img 
                    src="{{ url('frontend/images/updown/bulan_2@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="bulan2"
                    width="202"
                    height="200"
                  />
                  <div id="picModal15" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic15">
                  </div>
                </div>
                <p>
                  Salah satu momen yang memberi banyak
                  pelajaran buat kita. Satu bulan penuh kita
                  lalui bersama di sebuah desa bernama 
                  Batujaya. Lucunya, sebulan bersamamu 
                  sama sekali tak menimbulkan bosan. 
                  Malah rasanya membuat ketagihan. 
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge">
              <div class="timeline-text">
                22
                <br>
                Jun
                <br>
                2019
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Mengenal Lebih Jauh Lagi</h4>
              </div>
              <div class="timeline-body">
                <div class="pic-inline">
                  <div class="one-pic-ls"></div>
                  <img 
                    src="{{ url('frontend/images/updown/jauh_3@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="jauh3"
                    width="240"
                    height="181"
                  />
                  <div id="picModal16" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic16">
                  </div>
                </div>
                <p>
                  Setelah kamu tahun lalu, kini giliran aku 
                  yang mengenal lebih jauh keluargamu. Ini
                  memang bukan kali pertama aku bertemu,
                  tapi kali ini rasanya lebih membuat jantung
                  berdebar karena aku bertemu keluarga
                  besarmu. Seharian penuh.   
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge">
              <div class="timeline-text">
                22
                <br>
                Jul
                <br>
                2019
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Satu Target Selesai</h4>
              </div>
              <div class="timeline-body">
                <div class="pic-inline">
                  <div class="one-pic-md"></div>
                  <img 
                    src="{{ url('frontend/images/updown/target_1@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="target1"
                    width="202"
                    height="200"
                  />
                  <div id="picModal17" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic17">
                  </div>
                </div>
                <p>
                  Step terakhir selama empat tahun akhirnya
                  berhasil kita lalui pada hari yang sama dan
                  nilai yang sama, Uniknya, dospem kamu 
                  adalah pengujiku. Lalu dia sadar bahwa 
                  kita bukanlah sebatas teman. 
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge">
              <div class="timeline-text-twoline">
                Oct
                <br>
                2019
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Dari Infus Jadi Toga</h4>
              </div>
              <div class="timeline-body">
                <div class="pic-inline">
                  <img 
                    src="{{ url('frontend/images/updown/toga_1@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="toga1"
                    width="202"
                    height="200"
                  />
                  <div id="picModal18" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic18">
                  </div>

                  <div class="pic-margin"></div>
                  <img 
                    src="{{ url('frontend/images/updown/toga_2@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="toga2"
                    width="202"
                    height="200"
                  />
                  <div id="picModal19" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic19">
                  </div>
                </div>
                <p>
                  Awal bulan ini, ada sedih yang timbul di
                  hati. Melihatmu terbaring dengan infus di
                  tanganmu membuatku tak tenang. Aku
                  bersyukur seminggu kemudian kamu 
                  dibolehkan pulang. Dan infus itu berganti
                  menjadi toga di akhir bulan saat kita 
                  wisuda bersamaan. Satu target lagi 
                  telah kita capai, banyak target lainnya 
                  sudah menunggu untuk kita taklukan.  
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge">
              <div class="timeline-text">
                14
                <br>
                Nov
                <br>
                2019
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Tak Mau Kalah</h4>
              </div>
              <div class="timeline-body">
                <div class="pic-inline">
                  <div class="one-pic-md"></div>
                  <img 
                    src="{{ url('frontend/images/updown/kalah_1@2x.png') }}" 
                    alt="Tangis Loveline"
                    class="pic-thumb"
                    id="kalah1"
                    width="202"
                    height="200"
                  />
                  <div id="picModal20" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="pic20">
                  </div>
                </div>
                <p>
                  Malam ini amarah kembali menghampiri
                  kita. Namun dengan tingkat yang jauh
                  lebih besar dari yang pernah kita alami
                  sebelumnya. Penyebabnya adalah kamu 
                  yang berpikir 'A' sedangkan aku berpikir
                  sebaliknya. Tapi lagi-lagi kita tak mau 
                  kalah dengan amarah yang melanda. Dan
                  kembali membaik dua hari setelahnya.
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge">
              <div class="timeline-text-twoline">
                Dec - Jan
                <br>
                2020
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Ulang Tahun Lagi</h4>
              </div>
              <div class="timeline-body">
                <p>
                  Tahun ini berbeda dibanding sebelumnya.
                  Ulang tahun kita hanya dihabiskan dengan
                  makan-makan dan mencari kado yang tak
                  kunjung ditemukan hingga H+3 hari ulang
                  tahunmu. Namun, pergantian tahun kita 
                  lewati dengan penuh kesenangan. Sebelum
                  akhirnya ada kabar bahwa ijazahku luntur
                  terendam banjir yang datang.  
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-badge">
              <div class="timeline-text">
                24
                <br>
                May
                <br>
                2020
              </div>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Awal Tahun Keempat</h4>
              </div>
              <div class="timeline-body">
                <p>
                  Hari ini tepat 3 tahun sudah kita bersama.
                  Aku sengaja tidak menaruh tanggal 24 
                  Mei di loveline ini. Karena aku sadar tahun
                  sebelumnya aku memang tak pernah 
                  memberimu apa-apa. Dan kali ini, aku 
                  harap hadiahku bisa membuatmu melihat
                  kembali yang sudah kita alami. Dari naik 
                  dan turun yang sudah kita lalui berkali-kali.
                  Sampai pencapaian yang sudah kita raih
                  sampai saat ini. Sehingga hal-hal tadi bisa
                  menjadi pengingat dan penguat dalam 
                  hubungan ini. Dan bertahan hingga tua
                  nanti.  
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge">
              <div class="timeline-text-loading">
                <img 
                  src="{{ url('frontend/images/icons/ic_loading.png') }}" 
                  alt=""
                  width= "34"
                  height= "34" 
                />
                <br>
                Loading
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
</main>

@endsection

@push('addon-script')
  <script>
    var modal = document.getElementById("picModal");
    var img = document.getElementById("tangis1");
    var modalImg = document.getElementById("pic1");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal2");
    var img = document.getElementById("tangis2");
    var modalImg = document.getElementById("pic2");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[1];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal3");
    var img = document.getElementById("birthday1");
    var modalImg = document.getElementById("pic3");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[2];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal4");
    var img = document.getElementById("birthday2");
    var modalImg = document.getElementById("pic4");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[3];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal5");
    var img = document.getElementById("jatuh1");
    var modalImg = document.getElementById("pic5");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[4];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal6");
    var img = document.getElementById("jatuh2");
    var modalImg = document.getElementById("pic6");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[5];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal7");
    var img = document.getElementById("jauh1");
    var modalImg = document.getElementById("pic7");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[6];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal8");
    var img = document.getElementById("jauh2");
    var modalImg = document.getElementById("pic8");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[7];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal9");
    var img = document.getElementById("kkp1");
    var modalImg = document.getElementById("pic9");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[8];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal10");
    var img = document.getElementById("proses1");
    var modalImg = document.getElementById("pic10");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[9];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal11");
    var img = document.getElementById("proses2");
    var modalImg = document.getElementById("pic11");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[10];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal12");
    var img = document.getElementById("birthday3");
    var modalImg = document.getElementById("pic12");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[11];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal13");
    var img = document.getElementById("birthday4");
    var modalImg = document.getElementById("pic13");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[12];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal14");
    var img = document.getElementById("bulan1");
    var modalImg = document.getElementById("pic14");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[13];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal15");
    var img = document.getElementById("bulan2");
    var modalImg = document.getElementById("pic15");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[14];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal16");
    var img = document.getElementById("jauh3");
    var modalImg = document.getElementById("pic16");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[15];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal17");
    var img = document.getElementById("target1");
    var modalImg = document.getElementById("pic17");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[16];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal18");
    var img = document.getElementById("toga1");
    var modalImg = document.getElementById("pic18");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[17];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal19");
    var img = document.getElementById("toga2");
    var modalImg = document.getElementById("pic19");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[18];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal20");
    var img = document.getElementById("kalah1");
    var modalImg = document.getElementById("pic20");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[19];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
@endpush