@extends('layout')
@section('title', 'Registration')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            /*background: url('{{ asset('images/art.jpg') }}') center center fixed; */
            background-size: cover;
            margin: 0; /* Reset margin to remove default body margin */
            padding: 0; /* Reset padding to remove default body padding */
        }

        .container {
            color: #800000; /* Maroon */
            border-radius: 8px;
            padding: 20px;
            margin-top: 50px;
            text-align: left;
            background-color: rgba(255, 255, 255, 0.8); /* Misty Rose with opacity */
            height: 100vh; /* Set height to 100vh */
            width: 100vw; /* Set width to 100vw */
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }

        .alert {
            color: #8b0000; /* Dark Red */
            margin-bottom: 10px;
        }

        label {
            color: #800000; /* Maroon */
        }

        .form-control {
            border: 1px solid #800000; /* Maroon */
            color: #800000; /* Maroon */
        }

        .btn-primary {
            color: #fff; /* White */
            background-color: orange; /* Orange */
            border: 1px solid orange; /* Orange */
            display: block;
            margin: 0 auto; /* Center the button */
        }

        a {
            color: #800000; /* Maroon */
        }

        a:hover {
            color: #8b0000; /* Dark Red */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>

        <form action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto" style="width: 500px">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" >
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
@endsection



