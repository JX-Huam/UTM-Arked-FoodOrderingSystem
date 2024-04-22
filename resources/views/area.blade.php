{{-- @extends('layout')

@section('content')

<div style="max-width: 800px; margin: 0 auto;">

<h2 style="color: #333; text-align: center;">{{ $area }}</h2>

@foreach ($restaurants as $single)
<div style="background-color: #fff; border: 1px solid #ddd; margin: 10px 0; padding: 15px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
    <img style="max-width: 150px; max-height: 150px" src="{{Storage::url('img/'.$single->restaurant_pic)}}" alt="Restaurant Image">
    <div style="padding: 10px;">
        <h2><a style="color: #007bff; text-decoration: none;" href='/{{$single->area_name}}/{{$single->id}}'>{{ $single->restaurant }}</a></h2>
    </div>
</div>
@endforeach

</div>

@endsection
 --}}



 @extends('layout')

@section('content')

<div style="max-width: 800px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between;">

    <br>
    <h2 style="color: #333; text-align: center; width: 100%;">{{ $area }}</h2>

    @foreach ($restaurants as $single)
        <a href='/{{$single->area_name}}/{{$single->id}}' style="text-decoration: none; color: inherit; width: calc(33.33% - 20px);">
            <div style="flex-basis: 100%; background-color: #fff; border: 1px solid #ddd; margin-bottom: 20px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s, box-shadow 0.3s;">
                <img style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;" src="{{Storage::url('img/'.$single->restaurant_pic)}}" alt="Restaurant Image">
                <div style="padding: 20px; text-align: center;">
                    <h2 style="margin-bottom: 10px; color: #800000; font-weight: bold;">{{ $single->restaurant }}</h2>
                    <!-- Add additional information if needed -->
                </div>
            </div>
        </a>
    @endforeach

    <div style="width: 100%; text-align: center; margin-top: 20px;">
        <a href="{{ url()->previous() }}" style="text-decoration: none; color: inherit;">
            <button style="height: 50px; width: 100px; background-color: #333; color: #fff; border: none; border-radius: 50px; cursor: pointer; transition: background-color 0.3s;">
                Back
            </button>
        </a>

       

    </div>


    <div> <a href="{{ url('/') }}" class="btn btn-secondary mb-3">Home</a></div>
    {{-- <a href="{{ url('/') }}" class="btn btn-secondary mb-3">Back to Homepage</a> --}}

    
</div>

<style>
    div[style*="transition: transform"] {
        overflow: hidden;
    }

    div[style*="transition: transform"]:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
</style>

@endsection
