{{-- @extends('layout')

@section('content')

<div style="max-width: 800px; margin: 0 auto; text-align: center;">

    <h2 style="color: #333;">{{$restaurant->restaurant}}</h2>

    <form method="POST" action="/{{$restaurant->area_name}}/{{$restaurant->id}}/cart">
        <table style="border-collapse: collapse; width: 100%; max-width: 800px; margin: 20px auto; text-align: left;">
            <thead>
                @foreach ($menus as $single)
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 10px;"><img style="max-width: 150px; max-height: 150px;" src="{{Storage::url('img/'.$single->food_pic)}}" alt="Food Image"></td>
                        <td style="padding: 10px;"><h2>{{ $single->food_name }}</h2></td>
                        <td style="padding: 10px;"><h2>RM: {{ $single->food_price }}</h2></td>
                        <td style="padding: 10px;"><button style="background-color: #007bff; color: #fff; border: none; padding: 8px 12px; border-radius: 4px;"><a style="color: inherit; text-decoration: none;" href='/{{$restaurant->area_name}}/{{$single->restaurant_id}}/{{$single->menu_id}}'>Add to cart</a></button></td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </form>

    <br>
    <br>

    <form action="/{{$area}}/{{$restaurant->id}}/cart" style="text-align: center;">
        <input type="submit" value="Cart" style="height: 50px; width: 100px; background-color: #007bff; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
    </form>

</div>
@endsection --}}






{{-- 
@extends('layout')

@section('content')

<div style="max-width: 800px; margin: 0 auto; text-align: center;">
    <br>
    

    <h2 style="color: #333; margin-bottom: 20px;">{{$restaurant->restaurant}}</h2>
    

    <h5>Menu</h5>

    <form method="POST" action="/{{$restaurant->area_name}}/{{$restaurant->id}}/cart">
        <div style="max-width: 800px; margin: 20px auto; text-align: left; display: flex; flex-wrap: wrap; justify-content: space-between;">
            @foreach ($menus as $single)
                <div style="width: calc(33.33% - 10px); margin-bottom: 20px; background-color: #fff; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
                    <img style="width: 100%; height: 150px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;" src="{{Storage::url('img/'.$single->food_pic)}}" alt="Food Image">
                    <div style="padding: 20px;">
                        <h4 style="margin-bottom: 10px; color: #333; font-weight: bold;">{{ $single->food_name }}</h4>
                        <p style="margin-bottom: 10px; color: #555; font-size: 0.9em;">{{ $single->description }}</p>
                        <p style="color: #800000; font-size: 1.2em; margin: 0; font-weight: bold;">RM {{ $single->food_price }}</p>
                        <button style="background-color: #800000; color: #fff; border: none; padding: 8px 12px; border-radius: 4px; margin-top: 15px; cursor: pointer; transition: background-color 0.3s;">
                            <a style="color: inherit; text-decoration: none;" href='/{{$restaurant->area_name}}/{{$single->restaurant_id}}/{{$single->menu_id}}'>Add to Cart</a>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </form>

    
    <form action="/{{$area}}" style="text-align: center; margin-top: 20px;">
        <button style="height: 50px; width: 150px; background-color: #333; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
            <a style="color: inherit; text-decoration: none;" href="/{{$area}}">Back</a>
        </button>
    </form>

    <form action="/{{$area}}/{{$restaurant->id}}/cart" style="text-align: center; margin-top: 20px;">
        <input type="submit" value="View Cart" style="height: 50px; width: 150px; background-color: #800000; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
    </form>

    
   

</div>
@endsection --}}


@extends('layout')

@section('content')

<div style="max-width: 800px; margin: 0 auto; text-align: center;">
    <br>

    <h2 style="color: #333; margin-bottom: 20px;">{{$restaurant->restaurant}}</h2>

    <h5>Menu</h5>

    <form method="POST" action="/{{$restaurant->area_name}}/{{$restaurant->id}}/cart">
        <div style="max-width: 800px; margin: 20px auto; text-align: left; display: flex; flex-wrap: wrap; justify-content: space-between;">
            @foreach ($menus as $single)
                <div style="width: calc(33.33% - 10px); margin-bottom: 20px; background-color: #fff; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s, box-shadow 0.3s;">
                    <a href='/{{$restaurant->area_name}}/{{$single->restaurant_id}}/{{$single->menu_id}}' style="text-decoration: none; color: inherit; display: block; height: 100%;">
                        <img style="width: 100%; height: 150px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;" src="{{Storage::url('img/'.$single->food_pic)}}" alt="Food Image">
                        <div style="padding: 20px;">
                            <h4 style="margin-bottom: 10px; color: #333; font-weight: bold;">{{ $single->food_name }}</h4>
                            <p style="margin-bottom: 10px; color: #555; font-size: 0.9em;">{{ $single->description }}</p>
                            <p style="color: #800000; font-size: 1.2em; margin: 0; font-weight: bold;">RM {{ $single->food_price }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </form>

    <div style="display: flex; justify-content: space-between; margin-top: 20px;">
        <a href="/{{$area}}" style="text-decoration: none; color: inherit;">
            <button style="height: 50px; width: 150px; background-color: #333; color: #fff; border: none; border-radius: 50px; cursor: pointer; transition: background-color 0.3s;">
                Back
            </button>
        </a>
        <form action="/{{$area}}/{{$restaurant->id}}/cart" style="text-align: center;">
            <input type="submit" value="View Cart" style="height: 50px; width: 150px; background-color: #800000; color: #fff; border: none; border-radius: 50px; cursor: pointer; transition: background-color 0.3s;">
        </form>
    </div>

</div>

<style>
    /* Add this style for hover effect */
    div[style*="transition: transform"] {
        overflow: hidden;
    }

    div[style*="transition: transform"]:hover {
        transform: scale(1.05);
    }
</style>

@endsection
