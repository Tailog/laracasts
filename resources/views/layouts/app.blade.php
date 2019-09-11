<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- yields avec un paramètre pour utilisé une valeur par défault --}}
        <title>@yield('title','Laracast Tuto')</title>

    </head>
    <body>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/projects">Projects</a></li>
      </ul>
      @yield('content')
    </body>
</html>
