<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel LandingPage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
      <section id="app-layout">
      @include('includes.side-menu')
      <div class="welcome-jumbo">
        <div class="status">
          NEW
        </div>
        <h1>Billy Burger</h1>
        <img  class="burger-fries" src="/img/burger-png-the-eatery-steak-special-16.png" alt="burger and fries image">
      </div>
      </section>
      @yield('content')
    </body>
</html>
