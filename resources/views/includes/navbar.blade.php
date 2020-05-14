<div class="container">
  <center>
    <nav class="row navbar navbar-expand-lg navbar-light bg-white col-10">
      <a href="{{ route('home') }}" class="navbar-brand">Anka Story</a>
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a 
              href="{{ route('first') }}" 
              class="nav-link 
              @if(Route::currentRouteName() == 'first') active @endif"
            >
              First Meet
            </a>
          </li>
          <li class="nav-item mx-md-2">
            <a 
              href="{{ route('updown') }}" 
              class="nav-link 
              @if(Route::currentRouteName() == 'updown') active @endif"
            >
              Up & Down
            </a>
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