<!-- resources/views/order-form.blade.php -->

@extends('layouts.main') <!-- Assuming you have a main layout -->

@section('title', 'Place Order')

@section('container')
    <div class="container mt-4">
        <h1>Place Order</h1>

        <form method="post" action="{{ route('place.order') }}">
            @csrf
            <!-- Your form inputs go here -->

            <div class="mb-3">
                <label for="restaurant_id" class="form-label">Restaurant ID</label>
                <input type="text" class="form-control" id="restaurant_id" name="restaurant_id" required>
            </div>

            <div class="mb-3">
                <label for="created_date" class="form-label">Created Date</label>
                <input type="text" class="form-control" id="created_date" name="created_date" required>
            </div>

            <div class="mb-3">
                <label for="created_time" class="form-label">Created Time</label>
                <input type="text" class="form-control" id="created_time" name="created_time" required>
            </div>

            <div class="mb-3">
                <label for="menu_id" class="form-label">Menu ID</label>
                <input type="text" class="form-control" id="menu_id" name="menu_id" required>
            </div>

            <div class="mb-3">
                <label for="total_price" class="form-label">Total Price</label>
                <input type="text" class="form-control" id="total_price" name="total_price" required>
            </div>

            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    </div>
@endsection
