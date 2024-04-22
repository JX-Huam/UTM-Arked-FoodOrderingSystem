@extends("layout")
@section('content')
    <style>
        .btn-orange {
            color: #fff;
            background-color: orange;
            border: 1px solid orange;
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .btn-orange:hover {
            background-color: darkorange;
            border: 1px solid darkorange;
        }
    </style>

    <main>
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

        <div class="ms-auto me-auto mt-5" style="width: 500px;">
            <p>We will send a link to your email, use that link to reset your password.</p>

            <form action="{{route('forget.password.post')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" style="width: 300px;">
                </div>
                <button type="submit" class="btn btn-orange">Submit</button>
            </form>
        </div>
    </main>
@endsection


