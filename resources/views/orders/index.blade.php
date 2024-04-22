<!-- resources/views/orders/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>View Orders</h1>

    @foreach ($orders as $order)
        <div>
            <!-- Display order details here -->
            Restaurant ID: {{ $order->restaurant_id }}
            Created Date: {{ $order->created_date }}
            Created Time: {{ $order->created_time }}
            Menu ID: {{ $order->menu_id }}
            Total Price: {{ $order->total_price }}
        </div>
        <hr>
    @endforeach
@endsection
