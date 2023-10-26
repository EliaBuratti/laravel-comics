@vite(['resources/sass/partials/_card.scss'])

@extends ('layouts.main')


@section ('content_main')
<div class="eb_image-comic position-relative">
    <div class="container w-75">
        <!-- cover top left -->
        <div class="eb_cover position-absolute">
            <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="" srcset="">
            <span class="eb_category position-absolute">
                COMIC BOOK
            </span>
            <span class="eb_gallery position-absolute">
                WIEW GALLERY
            </span>
        </div>
    </div>
</div>

<div class="eb_description container w-75">
    <div class="row">
        <div class="col-8">
            <h2 class=" text-uppercase">titolo diasdas</h2>
            <div class="eb_banner ps-3 d-flex justify-content-between">
                <div class="eb_price col-9 p-2">
                    <span class="eb_valute">U.S. Price:</span>
                    <span class="eb_costs">19.99</span>
                    <span class=" text-uppercase eb_check float-end pe-4">avaiable</span>
                </div>
                <div class="eb_status col-3 p-2 text-center">
                    <span class="eb_control-avaiable">Check Availability &blacktriangledown;</span>
                </div>
            </div>

            <div class="eb_comic-description">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde illum voluptatibus, nam provident ipsa at eaque! Alias officiis molestiae dolores nostrum, modi laborum quod voluptatum veniam perferendis sed corporis perspiciatis consequatur aliquam quam nobis! Illo vero inventore impedit non similique modi nulla quaerat velit! Recusandae natus placeat ipsum eligendi voluptas.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde illum voluptatibus, nam provident ipsa at eaque! Alias officiis molestiae dolores nostrum, modi laborum quod voluptatum veniam perferendis sed corporis perspiciatis consequatur aliquam quam nobis! Illo vero inventore impedit non similique modi nulla quaerat velit! Recusandae natus placeat ipsum eligendi voluptas.

                </p>
            </div>
        </div>


        <div class="col-4 text-end">

            <h4 class="text-uppercase">advertisement</h4>
            <div class="eb_adv">
                <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="adv">
            </div>

        </div>
    </div>
</div>

<div class="eb_credits my-4">

    <div class="d-flex col-12 w-75 mx-auto">


        <div class="col-6">
            <div class="eb_row">
                <h2 class=" text-black">Talent</h2>
            </div>
            <div class="eb_row">
                <h5>Art by:</h5>
                <p>nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, </p>
            </div>
            <div class="eb_row">
                <h5>Written by:</h5>
                <p>nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, nomi, </p>
            </div>
        </div>
        <div class="col-6">
            <div class="eb_row">
                <h2 class=" text-black">Talent</h2>
            </div>
            <div class="eb_row">
                <h5>Art by:</h5>
                <p>nomi, nomi, nomi, nomi, nomi, </p>
            </div>
            <div class="eb_row">
                <h5>Art by:</h5>
                <p>nomi, nomi, nomi, nomi, nomi, </p>
            </div>
            <div class="eb_row">
                <h5>Art by:</h5>
                <p>nomi, nomi, nomi, nomi, nomi, </p>
            </div>
        </div>
    </div>
</div>

@endsection