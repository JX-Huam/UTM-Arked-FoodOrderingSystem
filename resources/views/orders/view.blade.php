@extends('layout')

@section('content')
    <div class="container">
        <h2>Your Orders</h2>

        @if($orders && count($orders) > 0)
            <ul>
                @foreach($orders as $order)
                    <li>{{ $order->order_details }}</li>
                @endforeach
            </ul>
        @else
            <p>No orders found.</p>
        @endif
    </div>
@endsection
