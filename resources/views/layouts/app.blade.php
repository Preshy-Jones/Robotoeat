<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Robotoeat') }}</title>

        

        {{-- @vite(['resources/js/app.js']) --}}

        <script src="https://kit.fontawesome.com/7f0efd52ac.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <livewire:styles />
        
    </head>
    <body>
        
        <div>
            @include('inc.navbar')   
            <div class="container">
                @yield('content')
            </div>
            @include('inc.footer')   
        </div>

        <livewire:scripts />        
    </body>
</html>


