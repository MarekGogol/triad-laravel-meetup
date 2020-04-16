@extends('layout')

@section('content')
<div class="page">
    <!-- ARTICLE -->
    <h1>{{ $article->name }}</h1>
    {!! $article->content !!}

    <!-- GALLERY -->
    <h2>Gallery</h2>
    <div class="row">

      @foreach($article->gallery as $image)
      <div class="col-xs-6 col-md-3">
        <a href="{{ $image->image->resize(1000, 1200) }}" class="thumbnail">
          <img src="{{ $image->image->resize(500, 600) }}" alt="">
        </a>
      </div>
      @endforeach
    </div>

    <!-- Autors -->
    <div>
        <h3>Autori</h3>
        {{ implode($article->authors()->pluck('name')->toArray(), ', ') }}
    </div>
</div>
@stop