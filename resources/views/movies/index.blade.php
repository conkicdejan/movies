@extends('layouts.app')

@section('title', 'Movies')

@section('content')

<ul>
    @foreach ($movies as $movie)
    <li>
        <h4>
            <a href="/movies/{{ $movie->id }}">
                {{ $movie->title }}
            </a>
        </h4>
        <p>{{ Str::limit($movie->storyline, 50) }}</p>
    </li>
    @endforeach
</ul>

@endsection