{{-- @extends('layout')

@section('content')

@php
    $order_foods = '';
    $lastIndex = count($foods) - 1;
    foreach ($foods as $index => $value) {
        $order_foods .= $value->menu_id;
        if ($index != $lastIndex) {
            $order_foods .= ', ';
        }
    }

    $total_price = 0;
    foreach ($foods as $index => $value) {
        $total_price += $value->price;
    }
@endphp

<div style="text-align: center;">

    <h2 style="color: #333;">Cart</h2>

    <table style="border-collapse: collapse; width: 100%; max-width: 600px; margin: 20px auto; text-align: left;">
        <thead>
            @foreach ($foods as $single)
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 10px;"><h3>Food name: {{ $single->food_name}}</h3></td>
                    <td style="padding: 10px;"><h3 style="padding-left: 30px;">Price: RM {{ $single->price }}</h3></td>
                </tr>
            @endforeach
        </thead>
    </table>

    <h2 style="color: #007bff; margin: 20px 0;">Total price: RM {{$total_price}}</h2>

    <a href="/{{$area}}/{{$restaurant->id}}" style="text-decoration: none;">
        <button style="background-color: #007bff; color: #fff; padding: 8px 12px; border: none; border-radius: 4px; cursor: pointer;">Back</button>
    </a>

    <br><br>

    <form method="POST" action="/{{$area}}/{{$restaurant->id}}/cart/payment" style="margin-top: 20px;">
        @csrf
        <input type="hidden" name="food_name" value="{{$order_foods}}">
        <input type="hidden" name="total_price" value="{{$total_price}}">
        <input type="submit" value="Proceed to Pay" style="background-color: #007bff; color: #fff; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">
    </form>

</div>




@endsection
 --}}

















{{-- @extends('layout')

@section('content')

@php
    $order_foods = '';
    $lastIndex = count($foods) - 1;
    foreach ($foods as $index => $value) {
        $order_foods .= $value->menu_id;
        if ($index != $lastIndex) {
            $order_foods .= ', ';
        }
    }

    $total_price = 0;
    foreach ($foods as $index => $value) {
        $total_price += $value->price;
    }
@endphp

<div style="text-align: center;">
    <br>
    <br>

    <h2 style="color: #333;">Cart</h2>

    <table style="border-collapse: collapse; width: 100%; max-width: 600px; margin: 20px auto; text-align: left;">
        <thead>
            @foreach ($foods as $single)
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 7px;"><h5><b>Item:   </b>{{ $single->food_name}}</h5></td>
                    <td style="padding: 7px;"><h5 style="padding-left: 150px;"><b>Price:   </b>   RM {{ $single->price }}</h5></td>
                    <td style="padding: 5px;">
                        <form method="POST" action="/{{$area}}/{{$restaurant->id}}/cart/delete" style="display: inline;">
                            @csrf
                            <input type="hidden" name="menu_id" value="{{ $single->menu_id }}">
                            <button type="submit" style="background-color: #dc3545; color: #fff; padding: 3px 15px; border: none; border-radius: 50px; cursor: pointer;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </thead>
    </table>
<br>
    <h3 style="color: #800000; margin: 20px 0;"><b>Total price:  </b> RM {{$total_price}}</h3>
    
<br>
    <a href="/{{$area}}/{{$restaurant->id}}" style="text-decoration: none;">
        <br>
        <button style="background-color: #555; color: #fff; padding: 5px 25px; border: none; border-radius: 50px; cursor: pointer;">Back</button>
    </a>

    <br><br>

    <form method="POST" action="/{{$area}}/{{$restaurant->id}}/cart/payment" style="margin-top: 20px;">
        @csrf
        <input type="hidden" name="food_name" value="{{$order_foods}}">
        <input type="hidden" name="total_price" value="{{$total_price}}">
        <input type="submit" value="Proceed to Pay" style="background-color: green; color: #fff; padding: 10px 15px; border: none; border-radius: 50px; cursor: pointer;">
    </form>

</div>

@endsection --}}






@extends('layout')

@section('content')

@php
    $order_foods = '';
    $lastIndex = count($foods) - 1;
    foreach ($foods as $index => $value) {
        $order_foods .= $value->menu_id;
        if ($index != $lastIndex) {
            $order_foods .= ', ';
        }
    }

    $total_price = 0;
    foreach ($foods as $index => $value) {
        $total_price += $value->price;
    }
@endphp

<div style="text-align: center;">
    <br>
    <br>

    <h2 style="color: #333;">Cart</h2>

    @if(count($foods) > 0)
        <table style="border-collapse: collapse; width: 100%; max-width: 600px; margin: 20px auto; text-align: left;">
            <thead>
                @foreach ($foods as $single)
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 7px;"><h5><b>Item:   </b>{{ $single->food_name}}</h5></td>
                        <td style="padding: 7px;"><h5 style="padding-left: 150px;"><b>Price:   </b>   RM {{ $single->price }}</h5></td>
                        <td style="padding: 5px;">
                            <form method="POST" action="/{{$area}}/{{$restaurant->id}}/cart/delete" style="display: inline;">
                                @csrf
                                <input type="hidden" name="menu_id" value="{{ $single->menu_id }}">
                                <button type="submit" style="background-color: #dc3545; color: #fff; padding: 3px 15px; border: none; border-radius: 50px; cursor: pointer;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </thead>
        </table>
        <br>
        <h3 style="color: #800000; margin: 20px 0;"><b>Total price:  </b> RM {{$total_price}}</h3>
        <br>
    @else
        <p>No items added to the cart.</p>
    @endif

    <a href="/{{$area}}/{{$restaurant->id}}" style="text-decoration: none;">
        <button style="background-color: #555; color: #fff; padding: 5px 25px; border: none; border-radius: 50px; cursor: pointer;">Back</button>
    </a>

    <br><br>

    @if(count($foods) > 0)
        <form method="POST" action="/{{$area}}/{{$restaurant->id}}/cart/payment" style="margin-top: 20px;">
            @csrf
            <input type="hidden" name="food_name" value="{{$order_foods}}">
            <input type="hidden" name="total_price" value="{{$total_price}}">
            <input type="submit" value="Proceed to Pay" style="background-color: green; color: #fff; padding: 10px 15px; border: none; border-radius: 50px; cursor: pointer;">
        </form>
    @endif
</div>

@endsection
