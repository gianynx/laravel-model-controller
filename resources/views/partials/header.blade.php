<header>
    <div class="container d-flex justify-content-between">
        <div id="img_container">
            <a href="{{ route('pages.home') }}"><img src="{{ asset('img/dream_cinema.png') }}" alt="dream_cinema_logo"></a>
        </div>
        <div id="navbar_container" class="pt-5">
            <nav class="navbar-nav">
                <ul class="d-flex list-unstyled pt-5 fs-5">
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.discover' ? 'active' : '' }}"
                            href="{{ route('pages.discover') }}">
                            scopri il dream cinema
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.rates' ? 'active' : '' }}"
                            href="{{ route('pages.rates') }}">
                            tariffe e abbonamenti
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.programmation' ? 'active' : '' }}"
                            href="{{ route('pages.programmation') }}">
                            programmazione
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.location' ? 'active' : '' }}"
                            href="{{ route('pages.location') }}">
                            dove siamo
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
