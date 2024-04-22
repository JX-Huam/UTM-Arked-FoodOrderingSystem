@extends('layouts.main')

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('container')

<h1>View Sales</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Created Date</th>
                    <th>Created Time</th>
                    <th>Menu ID</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->created_date }}</td>
                        <td>{{ $item->created_time }}</td>
                        <td>{{ $item->menu_id }}</td>
                        <td>RM. {{ number_format($item->total_price, 0, ",", ".") }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('/owner-home') }}" class="btn btn-secondary mb-3">Back to Homepage</a>

@endsection

