<aside>
    <h6>Lateses movies</h6>
    <ul>
        @foreach ($movieLastFive as $movie)
            <li><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>
</aside>