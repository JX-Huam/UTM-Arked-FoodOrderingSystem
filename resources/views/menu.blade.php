{{-- @extends('layout')

@section('content')

<div style="text-align: center;">

    <img style="max-width: 150px; max-height: 150px;" src="{{Storage::url('img/'.$menu->food_pic)}}" alt="Food Image">

    <h1 style="color: #333; margin: 10px 0;">{{$menu->food_name}}</h1>

    <h1 style="color: #007bff; margin: 10px 0;">RM {{$menu->food_price}}</h1>

    <form method="POST" action="/{{$area}}/{{$menu->restaurant_id}}/cart/store" style="margin: 20px 0;">
        @csrf
        <input type="hidden" name="menu_id" value="{{$menu->menu_id}}">
        <input type="hidden" name="food_name" value="{{$menu->food_name}}">
        <input type="hidden" name="food_name" value="{{$menu->description}}">
        <input type="hidden" name="price" value="{{$menu->food_price}}">
        <input type="submit" value="Add to Cart" style="background-color: #007bff; color: #fff; padding: 8px 12px; border: none; border-radius: 4px; cursor: pointer;">
    </form>

</div>

@endsection --}}






{{-- @extends('layout')

@section('content')

<div class="container mt-4">
    <div class="card" style="max-width: 300px; margin: 0 auto; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <img class="card-img-top mx-auto d-block" style="max-width: 150px; max-height: 150px; border-radius: 50%;" src="{{Storage::url('img/'.$menu->food_pic)}}" alt="Food Image">

        <div class="card-body">
            <h4 class="card-title" style="color: #333;">{{$menu->food_name}}</h4>

            <p class="card-text" style="color: black; "> {{$menu->description}}</p>

            <h5 class="card-text" style="color: #800000; font-weight: bold;">RM {{$menu->food_price}}</h5>

            <form method="POST" action="/{{$area}}/{{$menu->restaurant_id}}/cart/store" style="margin-top: 20px;">
                @csrf
                <input type="hidden" name="menu_id" value="{{$menu->menu_id}}">
                <input type="hidden" name="food_name" value="{{$menu->food_name}}">
                <input type="hidden" name="description" value="{{$menu->description}}">
                <input type="hidden" name="price" value="{{$menu->food_price}}">
                <button type="submit" class="btn btn-primary" style="width: 100%; border-radius: 4px; cursor: pointer;">Add to Cart</button>
            </form>
        </div>
    </div>
</div>

@endsection
 --}}





 {{-- @extends('layout')

@section('content')

<div class="container mt-4">
    

    <div class="card" style="max-width: 300px; margin: 0 auto; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <img class="card-img-top mx-auto d-block" style="max-width: 150px; max-height: 150px; border-radius: 50%;" src="{{ Storage::url('img/'.$menu->food_pic) }}" alt="Food Image">

        <div class="card-body">
            <h4 class="card-title" style="color: #333;">{{ $menu->food_name }}</h4>

            <p class="card-text" style="color: black; ">{{ $menu->description }}</p>

            <h5 class="card-text" style="color: #800000; font-weight: bold;">RM {{ $menu->food_price }}</h5>

            <form method="POST" action="/{{ $area }}/{{ $menu->restaurant_id }}/cart/store" style="margin-top: 20px;">
                @csrf
                <input type="hidden" name="menu_id" value="{{ $menu->menu_id }}">
                <input type="hidden" name="food_name" value="{{ $menu->food_name }}">
                <input type="hidden" name="description" value="{{ $menu->description }}">
                <input type="hidden" name="price" value="{{ $menu->food_price }}">
                <button type="submit" class="btn btn-primary" style="width: 100%; border-radius: 4px; cursor: pointer;">Add to Cart</button>
            </form>
            
        </div>

        
    </div>

    <a href="{{ url()->previous() }}" style="text-decoration: none; color: inherit; display: block; margin-bottom: 10px;">
        <span>&#8592; Back</span>
    </a>
</div>


<style>
    /* Style for the back button */
    a[href="{{ url()->previous() }}"] {
        display: block;
        background-color: #800000;
        color: #fff;
        padding: 10px;
        text-align: center;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    a[href="{{ url()->previous() }}"]:hover {
        background-color: #5b0000;
    }
</style>

@endsection --}}







{{-- @extends('layout')

@section('content')

<div class="container mt-4">
    <div class="card" style="max-width: 300px; margin: 0 auto; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <img class="card-img-top mx-auto d-block" style="max-width: 150px; max-height: 150px; border-radius: 50%;" src="{{ Storage::url('img/'.$menu->food_pic) }}" alt="Food Image">

        <div class="card-body">
            <h4 class="card-title" style="color: #333;">{{ $menu->food_name }}</h4>

            <p class="card-text" style="color: black;">{{ $menu->description }}</p>

            <h5 class="card-text" style="color: #800000; font-weight: bold;">RM {{ $menu->food_price }}</h5>

            <form method="POST" action="/{{ $area }}/{{ $menu->restaurant_id }}/cart/store" style="margin-top: 20px;">
                @csrf
                <input type="hidden" name="menu_id" value="{{ $menu->menu_id }}">
                <input type="hidden" name="food_name" value="{{ $menu->food_name }}">
                <input type="hidden" name="description" value="{{ $menu->description }}">
                <input type="hidden" name="price" value="{{ $menu->food_price }}">
                <button type="submit" class="btn btn-primary" style="width: 100%; border-radius: 4px; cursor: pointer;">Add to Cart</button>
            </form>
        </div>
    </div>
    
    <div class="text-center mt-3">
        <a href="{{ url()->previous() }}" class="btn btn-secondary" style="background-color: #555; color: #fff; border: none; border-radius: 4px; cursor: pointer;">Back</a>
    </div>
</div>

<style>
    /* Style for the back button */
    a.btn-secondary {
        display: inline-block;
        padding: 10px 20px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    a.btn-secondary:hover {
        background-color: #333;
    }
</style>

@endsection --}}





{{-- @extends('layout')

@section('content')

<div class="container mt-4">
    <div class="card" style="max-width: 300px; margin: 0 auto; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden;">
        <div style="text-align: center; background-color: #f8f9fa; padding: 10px; border-bottom: 1px solid #ddd;">
            <img class="card-img-top mx-auto d-block" style="max-width: 150px; max-height: 150px; border-radius: 50%; object-fit: cover; border: 4px solid #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" src="{{ Storage::url('img/'.$menu->food_pic) }}" alt="Food Image">
        </div>

        <div class="card-body">
            <h4 class="card-title" style="color: #333; margin-top: 15px;">{{ $menu->food_name }}</h4>

            <p class="card-text" style="color: #555; margin-bottom: 10px;">{{ $menu->description }}</p>

            <h5 class="card-text" style="color: #800000; font-weight: bold;">RM {{ $menu->food_price }}</h5>

            <form method="POST" action="/{{ $area }}/{{ $menu->restaurant_id }}/cart/store" style="margin-top: 20px;">
                @csrf
                <input type="hidden" name="menu_id" value="{{ $menu->menu_id }}">
                <input type="hidden" name="food_name" value="{{ $menu->food_name }}">
                <input type="hidden" name="description" value="{{ $menu->description }}">
                <input type="hidden" name="price" value="{{ $menu->food_price }}">
                <button type="submit" class="btn btn-primary" style="width: 100%; border-radius: 4px; cursor: pointer;">Add to Cart</button>
            </form>
        </div>
    </div>

    <div class="text-center mt-3">
        <a href="{{ url()->previous() }}" class="btn btn-secondary" style="background-color: #555; color: #fff; border: none; border-radius: 4px; cursor: pointer;">Back</a>
    </div>
</div>

<style>
    /* Style for the back button */
    a.btn-secondary {
        display: inline-block;
        padding: 10px 20px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    a.btn-secondary:hover {
        background-color: #333;
    }
</style>

@endsection --}}



@extends('layout')

@section('content')
<div class="container mt-4">
    <br>
    <div class="card" style="max-width: 400px; margin: 0 auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff;">

        <div style="text-align: center; background-color: #f8f9fa; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <img class="card-img-top" style="width: 100%; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" src="{{ Storage::url('img/'.$menu->food_pic) }}" alt="Food Image">
        </div>

        <div class="card-body" style="padding: 20px;">
            <h4 class="card-title" style="color: #333; margin-top: 15px; font-size: 1.5em; font-weight: bold;">{{ $menu->food_name }}</h4>

            <p class="card-text" style="color: #555; margin-bottom: 15px; font-size: 1em;">{{ $menu->description }}</p>

            <h5 class="card-text" style="color: #800000; font-weight: bold; font-size: 1.2em;">RM {{ $menu->food_price }}</h5>

            <form method="POST" action="/{{ $area }}/{{ $menu->restaurant_id }}/cart/store" style="margin-top: 20px;">
                @csrf
                <input type="hidden" name="menu_id" value="{{ $menu->menu_id }}">
                <input type="hidden" name="food_name" value="{{ $menu->food_name }}">
                <input type="hidden" name="description" value="{{ $menu->description }}">
                <input type="hidden" name="price" value="{{ $menu->food_price }}">
                <button type="submit" class="btn btn-primary mx-auto d-block" style="height: 30%; width: 35%; border-radius: 35px; cursor: pointer; background-color: #800000; border: none;">Add to Cart</button>

            </form>
        </div>
    </div>

    <div class="text-center mt-3">
        <br>
        <br>
        <a href="{{ url()->previous() }}" class="btn btn-secondary" style="width:8%; background-color: #333; color: #fff; border: none; border-radius: 35px; cursor: pointer; padding: 10px 20px; text-decoration: none;">Back</a>
    </div>
</div>

<style>
    /* Style for the back button */
    a.btn-secondary:hover {
        background-color: #555;
    }
</style>

@endsection
