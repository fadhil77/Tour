<!-- ----------------------------  Navigation ---------------------------------------------- -->

<nav class="nav">
    <div class="nav-menu flex-row">
        <div class="nav-brand">
            <a href="{{route('home')}}" class="text-gray">Tour</a>
        </div>
        <div class="toggle-collapse">
            <div class="toggle-icons">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div>
            <ul class="nav-items">
                <li class="nav-link">
                    <a href="{{route('home')}}">Beranda</a>
                </li>
                <li class="nav-link">
                    <a href="{{route('virtual')}}">Virtual Tour</a>
                </li>
                <li class="dropdown">
                        <button class="dropbtn">Profile Wisata
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="{{ route('profile_tb') }}">Taman Burung</a>
                          <a href="{{ route('profile_dat') }}">Dunia Air Tawar</a>
                          <a href="{{ route('profile_kmd') }}">Museum Komodo</a>
                        </div>
                </li>
                <li class="nav-link">
                    <a href="{{url('testimoni')}}">Testimoni</a>
                </li>
                <li class="nav-link">
                    <a href="{{route('artikel')}}">Artikel</a>
                </li>
            </ul>
        </div>

        @guest
            @if (Route::has('login'))

            <div class="login text-gray">
                <a href="{{ route('login') }}">Login</a>
            </div>

            @endif
            @else

            <li class="dropdown_login">
                <button class="dropbtn_login">{{ Auth::user()->name }}
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content-login">
                  <a href="{{ route('logout') }}">Logout</a>
                </div>
        </li>

        @endguest

    </div>
</nav>

<!-- ------------x---------------  Navigation --------------------------x------------------- -->
