
@extends('layouts/main')


@section('container')

    @foreach ( $posts as $post)

<article class="mt-10 mb-10">
    <h2>
        <a href="/posts/{{ $post["slug"] }}"> {{ $post["title"] }}</h2> </a>
    <h6>by: {{ $post["author"] }}</h6>
    <p>{{ $post["body"] }}</p>
</article>
    @endforeach

    



    

@endsection

