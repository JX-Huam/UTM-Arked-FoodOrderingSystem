{{-- @extends('layout')

@section('content')
    
<div style="max-width: 800px; margin: 0 auto;">

    <h1 style="color: #333; text-align: center;">Areas</h1>

    @foreach ($area as $single)
        <div style="background-color: #fff; border: 1px solid #ddd; margin: 10px 0; padding: 15px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <div style="padding: 10px;">
                <h2><a style="color: #007bff; text-decoration: none;" href="/{{$single->area_name}}">{{$single->area_name}}</a></h2>
            </div>
        </div>
    @endforeach

</div>



@endsection --}}




{{-- @extends('layout')

@section('content')

<div style="max-width: 800px; margin: 0 auto;">

    <h1 style="color: #333; text-align: center; margin-bottom: 20px;">Explore Areas</h1>

    @foreach ($area as $single)
        <a href="/{{$single->area_name}}" style="text-decoration: none; color: inherit;">
            <div style="background-color: #f8f9fa; border: 1px solid #ced4da; margin: 10px 0; padding: 15px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div style="padding: 10px;">
                    <h2 style="font-size: 1.5em; margin: 0;">{{$single->area_name}}</h2>
                </div>
            </div>
        </a>
    @endforeach

</div>

@endsection --}}

@extends('layout')

@section('content')

<div style="max-width: 800px; margin: 0 auto;">

    <h1 style="color: #333; text-align: center; margin-bottom: 20px;">Explore Areas</h1>

    @foreach ($area as $single)
        <a href="/{{$single->area_name}}" style="text-decoration: none; color: inherit;">
            <div style="background-color: #f8f9fa; border: 1px solid #ced4da; margin: 10px 0; padding: 15px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
                <div style="padding: 10px;">
                    <h2 style="font-size: 1.5em; margin: 0;">{{$single->area_name}}</h2>
                </div>
            </div>
        </a>
    @endforeach

</div>

<style>
    /* Add this style for hover effect */
    a:hover > div {
        transform: scale(1.05);
    }
</style>

@endsection

