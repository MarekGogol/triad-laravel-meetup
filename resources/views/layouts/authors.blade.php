@extends('layout')

@section('content')

  <h1>Autori</h1>
  <br>

  <div class="row">
    @foreach($authors as $author)
    <div class="col-lg-4">
      <img class="img-circle" src="{{ $author->image->resize(200, 200) }}" alt="">
      <h2>{{ $author->name }}</h2>
      <p>{{ $author->description }}</p>
    </div>
    @endforeach
  </div>


  <br>
  <h2>Pridaj autora</h2>
  <form method="post">
    {!! csrf_field() !!}

    <div class="form-group">
      <label>{{ _('Meno a priezvisko') }}</label>
      <input type="text" class="form-control" name="name">
      @if ($errors->has('name'))
      <span class="error">{{ $errors->get('name')[0] }}</span>
      @endif
    </div>

    <input type="submit" class="btn btn-primary" value="Ulozit">
  </form>
@stop