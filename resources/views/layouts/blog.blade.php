@extends('layout')

@section('content')

  <div class="row featurette">

    <div class="col-md-8">
      <h2>Nazov clanku</h2>
      <p>Obsah clanku...</p>
      <a href="{{ action('BlogController@show', 1) }}">Read more...</a>
    </div>
    <div class="col-md-4">
      <img class="featurette-image img-responsive center-block" src="http://via.placeholder.com/200x200" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

@stop