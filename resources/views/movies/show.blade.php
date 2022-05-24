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
    <hr>
</div>

    <div class='container'>
        <h4>Comments:</h4>
        @foreach ($movie->comments as $comment)
            <p>{{ $comment->content }}</p>
            <p class='badge bg-primary'>{{ $comment->created_at }}</p>
            <hr>
        @endforeach
    </div>

    <div class='container'>
        <form method='post' action="/movies/{{ $movie->id }}/comments/create">
            @csrf

            <div class="form-group">
                <label for="content">Add comment:</label>
                <textarea class="form-control" name="content" id="content" rows="2"></textarea>
                @error('content')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br/>
            <button class='btn btn-primary' type="submit">Add comment</button>
        </form>
    </div>
@endsection