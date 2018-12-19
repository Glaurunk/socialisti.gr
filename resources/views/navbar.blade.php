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


      {{-- <form class="form-inline my-2 my-lg-0">
        {{ csrf_field() }}
        <input class="form-control mr-sm-2" type="search" placeholder="όροι αναζήτησης" aria-label="Αναζήτηση">
        <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Αναζήτηση</button>
      </form> --}}
    </div>
</nav>
