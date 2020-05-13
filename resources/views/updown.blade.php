<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:wght@300;400;500;600;700;800&family=Pacifico&display=swap">
  <link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}">
  <title>Anka Story</title>
</head>
<body>
  <div class="container">
    <center>
      <nav class="row navbar navbar-expand-lg navbar-light bg-white col-10">
        <a href="{{ route('home') }}" class="navbar-brand">Anka Story</a>
        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2">
              <a href="{{ route('first') }}" class="nav-link">First Meet</a>
            </li>
            <li class="nav-item mx-md-2">
              <a href="{{ route('updown') }}" class="nav-link active">Up & Down</a>
            </li>
            <li class="nav-item mx-md-2">
              <a href="#" class="nav-link">More Smiles</a>
            </li>
            <li class="nav-item mx-md-2">
              <a href="#" class="nav-link">Trivia</a>
            </li>
          </ul>
        </div>
      </nav>
    </center>
  </div>
  
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
              <div class="timeline-badge">
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
          </ul>
        </div>
      </div>
    </section>
  </main>
</body>
</html>

<script src="{{ url('frontend/libraries/jquery/jquery-3.5.0.min.js') }}"></script>
<script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>