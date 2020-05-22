@extends('layouts.home')
@section('title', 'Anka Story')

@section('content')

<header class="text-center">
  <h1>
    What a 
    <br>
    Journey
  </h1>
  <p>2017 - now</p>
  <a href="#remember" class="btn btn-take-look px-4 mt-5">
    Take a Look
  </a>
</header>

<main>
  <section class="section-remember" id="remember">
    <div class="container">
      <div class="row">
        <div class="col text-center section-remember-heading">
          <h2>Want to Remember?</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="section-remember-content" id="remember-content">
    <div class="container">
      <div class="section-remember-moment row justify-content-center">
        <div class="col-10 col-lg-5">
          <div class="card-moment text-center d-flex flex-column"
            style="background-image: url('frontend/images/moment/moment_1.png')">
            <div class="moment-title">When We First Met</div>
            <div class="moment-button mt-auto">
              <a href="{{ route('first') }}" class="btn btn-moment-details px-4">
                Remember
              </a>
            </div>
          </div>
        </div>
        <div class="col-10 col-lg-5">
          <div class="card-moment text-center d-flex flex-column"
            style="background-image: url('frontend/images/moment/moment_2.png')">
            <div class="moment-title">Up and Down</div>
            <div class="moment-button mt-auto">
              <a href="{{ route('updown') }}" class="btn btn-moment-details px-4">
                Remember
              </a>
            </div>
          </div>
        </div>
        <br>
        <div class="col-10 col-lg-5">
          <div class="card-moment text-center d-flex flex-column"
            style="background-image: url('frontend/images/moment/moment_3.png')">
            <div class="moment-title">One More Smile</div>
            <div class="moment-button mt-auto">
              <a href="{{ route('smile') }}" class="btn btn-moment-details px-4">
                Remember
              </a>
            </div>
          </div>
        </div>
        <div class="col-10 col-lg-5">
          <div class="card-moment text-center d-flex flex-column"
            style="background-image: url('frontend/images/moment/moment_4.png')">
            <div class="moment-title">Trivia & Reward</div>
            <div class="moment-button mt-auto">
              <a href="{{ route('trivia') }}" class="btn btn-moment-details px-4">
                Remember
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-chapter" id="chapter">
    <div class="container">
      <div class="row">
        <div class="div col text-center section-chapter-heading">
          <h2>Ready for New Chapter?</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="section-chapter-content" id="chapter-content">
    <div class="container">
      <div class="section-chapter-stats row justify-content-center">
        <div class="col-10 col-sm-5 col-md-4 col-lg-2 stats-detail text-center">
          <h2>36</h2>
          <p>Months</p>
        </div>
        <div class="col-10 col-sm-5 col-md-4 col-lg-2 stats-detail text-center">
          <h2>1096</h2>
          <p>Days</p>
        </div>
        <div class="col-10 col-sm-5 col-md-4 col-lg-2 stats-detail text-center">
          <h2 style="transform: rotate(90deg);">8</h2>
          <p>Smiles</p>
        </div>
        <div class="col-10 col-sm-5 col-md-4 col-lg-2 stats-detail text-center">  
          <h2>974</h2>
          <p>Moments</p>
        </div> 
        <div class="col-10 col-sm-5 col-md-4 col-lg-2 stats-detail text-center"> 
          <h2>More</h2>
          <p>to Come</p>
        </div>
      </div>
    </div>
  </section>
  <section class="section-ready">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <button 
            type="button" 
            class="btn btn-ready"
            data-toggle="modal"
            data-target="#vidChapter" 
          >
            I'm Ready
        </button>

          <div class="modal fade" id="vidChapter" 
            tabindex="-1" role="dialog" 
            aria-labelledby="vidChapterLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body mt-0 p-0">
                <div class="embed-responsive embed-responsive-16by9">
                  
                  <iframe 
                    class="embed-responsive-item" 
                    src="{{ url('frontend/images/videos/new_chapter.mp4') }}"
                    allowfullscreen>
                  </iframe>
                
                <!--
                  <video 
                    class="video-fluid" 
                    autoplay loop controls muted
                  >
                    <source 
                      src="{{ url('frontend/images/videos/new_chapter.mp4') }}" 
                      type="video/mp4" 
                    />
                  </video>
                -->
                </div>
              </div>
              
              <div class="modal-footer chapter-close justify-content-center">
                <span class="title-footer mr-2">Finish Watching?</span>
                <button type="button" class="btn btn-finish btn-rounded btn-md ml-3" data-dismiss="modal">Close</button>
              </div>
              
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-footer">
    <div class="container">
      <div class="section-footer-title col-12 text-center">
        <h1>
          Thank You
          <br>
          Key
        </h1>
      </div>
    </div>
  </section>
</main>

@endsection

@push('addon-script')
  
@endpush