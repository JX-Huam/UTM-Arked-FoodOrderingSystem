{{-- @extends('layout')

@section('content')

<div style="text-align: center;">

    <h1 style="color: #333;">Payment</h1>

    <h1 style="color: #007bff; margin: 20px 0;">Total price: RM {{$total_price}}</h1>

    <div class="item-box" style="margin: 20px 0;">
        <img style="max-width: 100%;" src="{{Storage::url('img/qrcode.jpg')}}" alt="QR code Image">
    </div>

    <a href="#" style="color: #007bff; text-decoration: none; margin: 10px 0; display: block;">Proceed to E-wallet</a>

    <p style="margin: 10px 0;">Click "Finish pay" after completing the payment</p>

    <form method="POST" action="/{{$area}}/{{$restaurant_id}}/cart/payment/store" style="margin: 20px 0;">
        @csrf
        <input type="hidden" name="restaurant_id" value="{{$restaurant_id}}">
        <input type="hidden" name="menu_id" value="{{$food_name}}">
        <input type="hidden" name="total_price" value="{{$total_price}}">
        <input type="submit" value="Finish Pay" style="background-color: #007bff; color: #fff; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;" onclick="myFunction()">
    </form>

    <a href="/{{$area}}/{{$restaurant_id}}" style="text-decoration: none; display: inline-block; margin: 10px 0;">
        <button style="background-color: #007bff; color: #fff; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Back to Restaurant Page</button>
    </a>

</div>


<script>
    function myFunction() {
        alert("Pay Succesful!");
    }
</script>

@endsection --}}





@extends('layout')

@section('content')

<div style="text-align: center; max-width: 600px; margin: 0 auto; padding: 20px;">

    <h1 style="color: #333; margin-bottom: 20px;">Payment</h1>

    <h1 style="color: #007bff; font-size: 1.5em; margin-bottom: 30px;">Total price: RM {{$total_price}}</h1>

    <div class="item-box" style="margin-bottom: 20px;">
        <img style="max-width: 100%; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" src="{{Storage::url('img/qrcode.jpg')}}" alt="QR code Image">
    </div>

    <a href="#" style="color: #007bff; text-decoration: none; display: block; margin-bottom: 10px;">Proceed to E-wallet</a>

    <p style="margin-bottom: 20px;">Click "Finish Pay" after completing the payment</p>

    <form method="POST" action="/{{$area}}/{{$restaurant_id}}/cart/payment/store" style="margin-bottom: 20px;">
        @csrf
        <input type="hidden" name="restaurant_id" value="{{$restaurant_id}}">
        <input type="hidden" name="menu_id" value="{{$food_name}}">
        <input type="hidden" name="total_price" value="{{$total_price}}">
        <input type="submit" value="Finish Pay" style="background-color: #008000; color: #fff; padding: 12px 20px; border: none; border-radius: 50px; cursor: pointer;" onclick="myFunction()">
    </form>

    <a href="/{{$area}}/{{$restaurant_id}}" style="text-decoration: none; display: inline-block; margin-bottom: 10px;">
        <button style="background-color: #555; color: #fff; padding: 8px 20px; border: none; border-radius: 50px; cursor: pointer;">Back to Restaurant Page</button>
    </a>

</div>

<script>
    function myFunction() {
        alert("Payment Successful!");
    }
</script>

<style>
    body {
        background-color: #f8f9fa;
    }
</style>

@endsection
