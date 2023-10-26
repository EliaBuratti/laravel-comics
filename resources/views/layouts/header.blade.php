@vite(['resources/sass/partials/_header.scss'])

<header>

    <div class="container p-0 pt-2">
        <nav class="navbar navbar-expand-lg p-0">
            <a class="navbar-brand eb_logo" href="#">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            </a>

            <div class="ms-auto eb_nav-section">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">
                        @foreach(Config::get('db_comic.navSections') as $section)
                        <li class="nav-item text-uppercase eb_nav-section">
                            <a class="nav-link active" aria-current="page" href="#">{{ $section }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </nav>
    </div>

</header>