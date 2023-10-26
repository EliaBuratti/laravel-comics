@extends ('layouts.main')

@section ('content_main')
<div class=" eb_cards p-5">
    <div class="container d-flex flex-wrap gap-5 justify-content-center">
        <h3>current series</h3>
        @foreach(Config::get('db_comic.comic_details') as $thumb)

        <div class="eb_card">
            <div class="cover">
                <img src="{{$thumb['thumb'] }}" alt="series">
            </div>
            <p>{{ $thumb['series'] }}</p>
        </div>

        @endforeach
    </div>

    <button class="load_more">LOAD MORE</button>
</div>

@endsection