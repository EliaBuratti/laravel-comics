@vite(['resources/sass/partials/_main.scss'])



<div class="eb_jumbotron">
    <img src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="jumbotron">


    @yield('content_main')


</div>



<div class="more">
    <div class="container d-flex flex-wrap justify-content-center">
        @foreach(Config::get('db_comic.cards') as $name => $image)
        <div class="col-5 col-lg  my-5">
            <img src="{{ Vite::asset('resources/images/' . $image) }}" alt="{{ $name }}" class="m-3">
            <span class="text-white text-uppercase ">{{ $name }}</span>
        </div>
        @endforeach
    </div>
</div>