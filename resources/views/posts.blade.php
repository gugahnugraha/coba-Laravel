@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
    <article>
    <h2>
        <a href="/blog/{{ $post["slug"] }}">{{ $post["title"] }}</a>
        </h2>
    <h6>By: {{ $post["author"] }}</h6>


    <p>{{ $post["body"] }}</p>
    </article>
    @endforeach

@endsection