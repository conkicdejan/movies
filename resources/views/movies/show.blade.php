@extends('layouts.app')

@section('title')
{{ $movie->title }}
@endsection

@section('content')
<div class='container'>
    <h2>{{ $movie->title }}</h2>
    <p class='badge bg-primary'>Genre: {{ $movie->genre }}</p>
    <p class='badge bg-primary'>Director: {{ $movie->director }}</p>
    <p class='badge bg-primary'>Year: {{ $movie->year }}</p>
    <p>{{ $movie->storyline }}</p>
</div>

@endsection