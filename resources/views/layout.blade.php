<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Ο προσωπικός ιστότοπος του Βασίλη Ασημακόπουλου.">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <div id="app"></div>
    {{-- <script type="text/javascript" src="{{ elixir('js/app.js') }}" defer></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <title id="title">Socialisti.gr - @yield('title')</title>

  </head>

  <body>

      @include('navbar')
      <div class="container">

          @include('errors')
          @yield('content')

      </div>

      @include('footer')
      @include('classChangeJQ')

  </body>

</html>
