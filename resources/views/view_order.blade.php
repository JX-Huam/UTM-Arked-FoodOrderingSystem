<!-- In your view_order.blade.php file -->
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Order Details for Restaurant</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Created Date</th>
                    <th>Created Time</th>
                    <th>Menu ID</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_date }}</td>
                        <td>{{ $order->created_time }}</td>
                        <td>{{ $order->menu_id }}</td>
                        <td>${{ $order->total_price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/owner-home') }}" class="btn btn-secondary mb-3">Back to Homepage</a>

    </div>
   @endsection

