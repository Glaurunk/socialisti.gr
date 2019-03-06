<nav class="navbar navbar-expand-lg navbar-light mb-5">
      <img src = "{{ asset('/images/socialistiLogo.png') }}" style="height: 100px;" class="mr-5"/>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item mx-3" id="list1">
          <a class="nav-link" href="/" id="link1">Αρχική</a>
        </li>
        <li class="nav-item mx-3" id="list2">
          <a class="nav-link" href="/contact" id="link2">Επικοινωνία</a>
        </li>
        <li class="nav-item mx-3" id="list3">
          <a class="nav-link" href="/articles" id="link3">Αρχείο Κειμένων</a>
        </li>
      </ul>


      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Dashboard') }}</a>
              </li>
              @if (Route::has('register'))
                  {{-- <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li> --}}
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>

    </div>
</nav>
