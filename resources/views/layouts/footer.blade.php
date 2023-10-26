@vite(['resources/sass/partials/_footer.scss'])

<footer>
    <!-- info and sites shop -->
    <div class="info-shop">
        <div class="container d-flex flex-wrap justify-content-between">

            <!-- list group -->
            <div class="eb_container-lists col-12 col-md-5 py-4">
                <!-- single list -->
                @foreach(Config::get('db_comic.list_info') as $title => $lists)

                <ul class="eb_list ps-0 pb-2">

                    <li class="list-unstyled"> {{ $title }} </li>

                    @foreach($lists as $section => $link)
                    <li class="list-unstyled">
                        <a href="{{ $link }}" class="text-decoration-none">
                            {{ $section }}
                        </a>
                    </li>
                    @endforeach
                </ul>

                @endforeach
            </div>

            <!-- logo -->
            <div class=" d-none d-sm-block col-md-6 eb_logo"></div>

        </div>
    </div>

    <!-- section logo -->
    <section>

        <!-- footer bar -->
        <div class="container d-flex justify-content-between py-4 align-items-center">

            <!-- register button -->
            <div class="register">
                <button>sing-up now!</button>
            </div>

            <!-- socials -->
            <div class="social d-flex">
                <h2 class="pe-4 text-center text-sm-start">follow us</h2>
                <div class="logo px-2 d-flex flex-wrap gap-2">
                    @foreach(Config::get('db_comic.socials') as $name => $details)
                    @foreach($details as $image => $link)
                    <a href="{{ $link }}">
                        <img src="{{ Vite::asset('resources/images/' . $image) }}" alt="{{ $image }}">
                    </a>
                    @endforeach

                    @endforeach
                </div>
            </div>

        </div>

    </section>

</footer>