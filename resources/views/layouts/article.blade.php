@extends('layout')

@section('content')
<div class="page">
    <!-- ARTICLE -->
    <h1>Nazov clanku</h1>
    <p>Obsah clanku...</p>

    <!-- GALLERY -->
    <h2>Gallery</h2>
    <div class="row">

      <div class="col-xs-6 col-md-3">
        <a href="http://via.placeholder.com/300x300" class="thumbnail">
          <img src="http://via.placeholder.com/300x300" alt="">
        </a>
      </div>
    </div>

    <!-- Autors -->
    <div>
        <h3>Autori</h3>
        Author 1, Autor 2...
    </div>
</div>
@stop