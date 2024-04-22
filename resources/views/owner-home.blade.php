{{-- @extends('layouts.main')

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('container')

<h1>Restaurant</h1>
<br>
<br>


<h5 class="toprated">Menu</h5>
<br>

@foreach ($foods as $food)
    

<div class="item-box" style="height: inherit;">
    <img src="{{ asset('assets/img/'. $food->food_pic) }}">

    <div class="item-details">
        <h3>{{ $food->food_name }}</h3>
        <p>RM. {{ $food->food_price }}</p>
        <p><b>Description: </b>{{ $food->description }}</p>
    </div>
</div>

@endforeach

@endsection --}}



{{-- @extends('layouts.main')

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('container')

<div class="container">
    <h1 class="text-center mt-5 mb-4">Restaurant</h1>

    <section class="menu-section">
        <h4 class="toprated">Menu</h4>
        <br>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($foods as $food)
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('assets/img/' . $food->food_pic) }}" class="card-img-top" alt="{{ $food->food_name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $food->food_name }}</h5>
                            <p class="card-text">RM. {{ $food->food_price }}</p>
                            <p class="card-text"><b>Description:</b> {{ $food->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>

<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    h1 {
        color: #333;
    }

    .menu-section {
        margin-top: 30px;
    }

    .card {
        transition: transform 0.3s ease;
        height: 100%;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-img-top {
        object-fit: cover;
        height: 200px; /* Adjust the height as needed */
    }

    .card-title {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }

    .card-text {
        color: #555;
    }
</style>

@endsection


 --}}








 @extends('layouts.main')

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('container')

<div class="container">
    <h1 class="text-center mt-5 mb-4">Restaurant</h1>

    <section class="menu-section">
        <h4 class="toprated">Menu</h4>
        <br>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($foods as $food)
                <div class="col mb-4">
                    <div class="card h-100 border-0 shadow">
                        <img src="{{ asset('assets/img/' . $food->food_pic) }}" class="card-img-top rounded" alt="{{ $food->food_name }}">
                        <div class="card-body">
                            <h5 class="card-title text-dark">{{ $food->food_name }}</h5>
                            <p class="card-text text-muted"><b>RM.</b> {{ $food->food_price }}</p>
                            <p class="card-text"><b>Description:</b> {{ $food->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>

<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    h1 {
        color: #333;
    }

    .menu-section {
        margin-top: 30px;
    }

    .card {
        transition: transform 0.3s ease;
        height: 100%;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-img-top {
        object-fit: cover;
        height: 200px; /* Adjust the height as needed */
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-title {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }

    .card-text {
        color: #555;
    }

    .shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .rounded {
        border-radius: 10px;
    }

    .text-dark {
        color: #333;
    }
</style>

@endsection





