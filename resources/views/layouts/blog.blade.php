@extends('layout')

@section('content')

  @foreach($articles as $article)
  <div class="row featurette">
    <div class="col-md-8">
      <h2>{{ $article->name }}</h2>
      <a href="{{ action('BlogController@show', $article->getSlug()) }}">Read more...</a>
    </div>
    <div class="col-md-4">
      <img class="featurette-image img-responsive center-block" src="{{ $article->image->resize(300, 300) }}" alt="{{ $article->name }}">
    </div>
  </div>

  <hr class="featurette-divider">
  @endforeach

@stop