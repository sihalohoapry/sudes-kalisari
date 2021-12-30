<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
  <div class="container">
    <a class="navbar-brand" href="">
      <img src="/images/logo_lampung_selatan.png" style="max-height: 51px" alt="logo" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          @auth
          <a class="nav-link" href="{{ route('profile') }}">Profil</a>
          @else
          <a class="nav-link" href="{{ route('login') }}">Profil</a>
          @endauth

        </li>
        <li class="nav-item">
          @auth
        <li class="nav-item">
          <a class="nav-link" href="#berita">Informasi Desa</a>
        </li>
        <a class="nav-link" href="{{ route('profile') }}">Layanan Penduduk</a>
        @else
        <a class="nav-link" href="{{ route('login') }}">Layanan Penduduk</a>
        @endauth
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="">Informasi Desa</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-success nav-link px-4 text-white" href="{{ route('login') }}">Login</a>
        </li>
        @endguest
      </ul>
      @auth
      <!-- Desktop Menu -->
      <ul class="navbar-nav d-none d-lg-flex">
        <li class="nav-item dropdown">
          @if (Auth::user()->roles=='ADMIN')
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Admin, {{ Auth::user()->name }}
          </a>
          @else
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Hi, {{ Auth::user()->name }}
            @endif

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @if (Auth::user()->roles =='ADMIN')
              <a class="dropdown-item" href="{{ route('admin-home') }}">Dashboard Admin</a>

              @else
              <a class="dropdown-item" href="{{ route('profile') }}">Dashboard</a>
              <a class="dropdown-item" href="{{ route('profile') }}">Settings</a>

              @endif
              <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
            </div>
        </li>
      </ul>

      <!-- Mobile Menu -->
      <ul class="navbar-nav d-block d-lg-none">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </li>
      </ul>
      @endauth
    </div>
  </div>
</nav>