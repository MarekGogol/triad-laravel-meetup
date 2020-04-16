<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Wohoooo</title>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  </head>

  <body>

    <!-- NAVIGACIA -->
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="{{ action('AboutController@index') }}">O nas</a></li>
                <li><a href="{{ action('AuthorsController@index') }}">Autori</a></li>
                <li><a href="{{ action('BlogController@index') }}">Blog</a></li>
                <li><a href="{{ action('ProductsController@index') }}">Products</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                @foreach( Localization::getLanguages() as $lang )
                <li class="{{ Localization::get()->getKey() == $lang->getKey() ? 'active' : '' }}">
                    <a href="/{{ $lang->slug }}">{{ $lang->slug }}</a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- NAVIGACIA END -->

    <div class="container body">
      @yield('content')

      <hr class="featurette-divider">

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div>

    @gettext

    <!-- Bullshits -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
  </body>
</html>
