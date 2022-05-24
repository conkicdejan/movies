@extends('layouts.app')

@section('title', 'Add movie')

@section('content')
<div class='container'>

    <form method='post' action="">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>
        
        <div class="form-group">
            <label for="genre">Genre</label>
            <input class="form-control" type="text" name="genre" id="genre">
        </div>

        <div class="form-group">
            <label for="director">Director</label>
            <input class="form-control" type="text" name="director" id="director">
        </div>

        <div class="form-group">
            <label for="year">Year</label>
            <input class="form-control" type="text" name="year" id="year">
        </div>

        <div class="form-group">
            <label for="storyline">Storyline</label>
            <textarea class="form-control" name="storyline" id="storyline" rows="5"></textarea>
        </div>
        <br/>
        <button class='btn btn-primary' type="submit">Add movie</button>


    </form>
</div>

@endsection
