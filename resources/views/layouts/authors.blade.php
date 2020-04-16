@extends('layout')

@section('content')

  <h1>Autori</h1>
  <br>

  <div class="row">
    <div class="col-lg-4">
      <img class="img-circle" src="http://via.placeholder.com/140x140" alt="">
      <h2>Autor</h2>
      <p>Lorem Ipsum je fiktívny text, používaný pri návrhu tlačovín a typografie. Lorem Ipsum je štandardným výplňovým textom už od 16. storočia, keď neznámy tlačiar zobral sadzobnicu plnú tlačových znakov a pomiešal ich, aby tak vytvoril vzorkovú knihu. Prežil nielen päť storočí, ale aj skok do elektronickej sadzby, a pritom zostal v podstate nezmenený. Spopularizovaný bol v 60-tych rokoch 20.storočia, vydaním hárkov Letraset, ktoré obsahovali pasáže Lorem Ipsum, a neskôr aj publikačným softvérom ako Aldus PageMaker, ktorý obsahoval verzie Lorem Ipsum.</p>
    </div>

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