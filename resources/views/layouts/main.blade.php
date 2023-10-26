@vite(['resources/sass/partials/_main.scss'])



<div class="eb_jumbotron">
    <img src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="jumbotron">


    @yield('content_main')


</div>