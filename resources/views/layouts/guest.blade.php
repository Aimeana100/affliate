{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="MUHAHE Template">
        <meta name="keywords" content="MUHAHE, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Muhahe Affiliate || Earn money infinetely</title>
        <!-- Css Styles -->
        <link rel="stylesheet" href="{{asset('assets/front/css/jquery-ui.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/front/css/booststrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/font-awesome.min.css')}}">
        <link rel="icon" href="{{asset('assets/front/img/log1.png')}}">
        @livewireStyles
    </head>

    <body>

{{$slot}}

 <!-- Footer Section End -->

        <!-- Js Plugins -->
        <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/front/js/main.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{asset('assets/front/js/booststrap.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{asset('assets/front/js/aos.js')}}"></script>
        <script src="{{asset('assets/front/js/mainj.js')}}"></script>
        <script src="{{asset('assets/front/js/jquerry.min.js')}}"></script>
        <script src="{{asset('assets/front/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/front/js/mainn.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        @livewireScripts
    </body>
</html>
