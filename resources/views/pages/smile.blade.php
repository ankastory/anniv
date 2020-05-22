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
      <div class="row">
        <div class="card-columns">
          <div class="card">
            <img 
              src="{{ url('frontend/images/smile/pic_1@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile1"
              width="328"
              height="403"
            />
            <div id="picModal1" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic1">
            </div>
            <img 
              src="{{ url('frontend/images/smile/pic_2@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile2"
              width="328"
              height="488"
            />
            <div id="picModal2" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic2">
            </div>
          </div>
          <div class="card card-two">
            <img 
              src="{{ url('frontend/images/smile/pic_5@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile3"
              width="321"
              height="323"
            />
            <div id="picModal3" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic3">
            </div>
            <img 
              src="{{ url('frontend/images/smile/pic_6@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile4"
              width="321"
              height="222"
            />
            <div id="picModal4" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic4">
            </div>
            <img 
              src="{{ url('frontend/images/smile/pic_7@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile5"
              width="629"
              height="451"
            />
            <div id="picModal5" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic5">
            </div>
          </div>
          <div class="card card-three">
            <img 
              src="{{ url('frontend/images/smile/pic_8@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile6"
              width="308"
              height="545"
            />
            <div id="picModal6" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic6">
            </div>
          </div>
          <div class="card card-four">
            <img 
              src="{{ url('frontend/images/smile/pic_9@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile7"
              width="309"
              height="230"
            />
            <div id="picModal7" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic7">
            </div>
            <img 
              src="{{ url('frontend/images/smile/pic_10@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile8"
              width="309"
              height="402"
            />
            <div id="picModal8" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic8">
            </div>
            <img 
              src="{{ url('frontend/images/smile/pic_11@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile9"
              width="309"
              height="364"
            />
            <div id="picModal9" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic9">
            </div>
          </div>
        </div>
        <div class="card-columns">
          <div class="card card-one-two">
            <img 
              src="{{ url('frontend/images/smile/pic_3@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile10"
              width="328"
              height="250"
            />
            <div id="picModal10" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic10">
            </div>
            <img 
              src="{{ url('frontend/images/smile/pic_4@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile11"
              width="328"
              height="257"
            />
            <div id="picModal11" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic11">
            </div>
          </div>
          <div class="card card-two-two">
            <img 
              src="{{ url('frontend/images/smile/pic_12@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile12"
              width="330"
              height="402"
            />
            <div id="picModal12" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic12">
            </div>
          </div>
          <div class="card card-four-two">
            <img 
              src="{{ url('frontend/images/smile/pic_13@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile13"
              width="609"
              height="403"
            />
            <div id="picModal13" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic13">
            </div>
          </div>
        </div>
        <div class="pic-margin-small">
          <div class="card-columns">
            <div class="card card-one-three">
              <img 
                src="{{ url('frontend/images/smile/pic_14@2x.png') }}" 
                alt=""
                class="pic-thumb"
                id="smile14"
                width="656"
                height="765"
              />
              <div id="picModal14" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="pic14">
              </div>
            </div>
            <div class="card card-two-three">
            </div>
            <div class="card card-three-three">
              <img 
                src="{{ url('frontend/images/smile/pic_15@2x.png') }}" 
                alt=""
                class="pic-thumb"
                id="smile15"
                width="303"
                height="431"
              />
              <div id="picModal15" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="pic15">
              </div>
              <img 
                src="{{ url('frontend/images/smile/pic_16@2x.png') }}" 
                alt=""
                class="pic-thumb"
                id="smile16"
                width="609"
                height="334"
              />
              <div id="picModal16" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="pic16">
              </div>
            </div>
            <div class="card card-four-three">
              <img 
                src="{{ url('frontend/images/smile/pic_17@2x.png') }}" 
                alt=""
                class="pic-thumb"
                id="smile17"
                width="312"
                height="431"
              />
              <div id="picModal17" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="pic17">
              </div>
            </div>
          </div>
        </div>
        <div class="card-columns">
          <div class="card card-one-four">
            <img 
              src="{{ url('frontend/images/smile/pic_18@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile18"
              width="326"
              height="485"
            />
            <div id="picModal18" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic18">
            </div>
            <img 
              src="{{ url('frontend/images/smile/pic_19@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile19"
              width="326"
              height="238"
            />
            <div id="picModal19" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic19">
            </div>
          </div>
          <div class="card card-two-four">
            <img 
              src="{{ url('frontend/images/smile/pic_20@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile20"
              width="378"
              height="286"
            />
            <div id="picModal20" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic20">
            </div>
            <img 
              src="{{ url('frontend/images/smile/pic_21@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile21"
              width="378"
              height="436"
            />
            <div id="picModal21" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic21">
            </div>
          </div>
          <div class="card card-three-four">
            <img 
              src="{{ url('frontend/images/smile/pic_22@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile22"
              width="561"
              height="722"
            />
            <div id="picModal22" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic22">
            </div>
          </div>
        </div>
        <div class="card-columns">
          <div class="card card-one-four">
            <img 
              src="{{ url('frontend/images/smile/pic_23@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile23"
              width="634"
              height="429"
            />
            <div id="picModal23" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic23">
            </div>
          </div>
          <div class="card card-two-four">   
          </div>
          <div class="card card-three-five">
            <img 
              src="{{ url('frontend/images/smile/pic_24@2x.png') }}" 
              alt=""
              class="pic-thumb"
              id="smile24"
              width="631"
              height="429"
            />
            <div id="picModal24" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="pic24">
            </div>
          </div>
        </div>
      </div>
      <div class="smile-footer"></div>
    </div>
  </section>
</main>

@endsection

@push('addon-script')
  <script>
    var modal = document.getElementById("picModal1");
    var img = document.getElementById("smile1");
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
    var img = document.getElementById("smile2");
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
    var img = document.getElementById("smile3");
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
    var img = document.getElementById("smile4");
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
    var img = document.getElementById("smile5");
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
    var img = document.getElementById("smile6");
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
    var img = document.getElementById("smile7");
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
    var img = document.getElementById("smile8");
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
    var img = document.getElementById("smile9");
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
    var img = document.getElementById("smile10");
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
    var img = document.getElementById("smile11");
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
    var img = document.getElementById("smile12");
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
    var img = document.getElementById("smile13");
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
    var img = document.getElementById("smile14");
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
    var img = document.getElementById("smile15");
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
    var img = document.getElementById("smile16");
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
    var img = document.getElementById("smile17");
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
    var img = document.getElementById("smile18");
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
    var img = document.getElementById("smile19");
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
    var img = document.getElementById("smile20");
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
  <script>
    var modal = document.getElementById("picModal21");
    var img = document.getElementById("smile21");
    var modalImg = document.getElementById("pic21");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[20];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal22");
    var img = document.getElementById("smile22");
    var modalImg = document.getElementById("pic22");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[21];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal23");
    var img = document.getElementById("smile23");
    var modalImg = document.getElementById("pic23");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[22];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
  <script>
    var modal = document.getElementById("picModal24");
    var img = document.getElementById("smile24");
    var modalImg = document.getElementById("pic24");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[23];
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
@endpush