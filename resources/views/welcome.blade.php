<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shombhob Meal System</title>
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <style>
       
    </style>
    <body class="antialiased" style="background-image: url('/image/background_photo.jpg');  background-repeat: no-repeat;">
        <div id="app">
        {{-- <router-view></router-view> --}}
            <app-component></app-component>
        </div>
      
      @vite('resources/js/app.js')

      <script src="{{ asset('frontend/js/bootstrap.js') }}"> </script>
    </body>
</html>
