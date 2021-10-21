<!DOCTYPE html>
<html lang="nl-NL">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" />
		<meta name="keywords" content="zangkoor, zanggroep, Vierlingsbeek, Groeningen, Boxmeer, Venray" />
		<meta name="author" content="Huub Peeters">
		<meta name="googlebot" content="all">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link href="{{ asset('css/mainzz.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
		<!-- Owl Stylesheets -->
		<link href="{{ asset('css/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Zanggroep Evergreen Vierlingsbeek</title>
    </head>
    <body>

        <div id="top">
<!--
            <h1 class="ml9">
                <span class="text-wrapper">
                    <span class="letters groen">Zanggroep Evergreen Vierlingsbeek</span>
                </span>
            </h1>
-->	
		    <h1>
				<span class="groen">Zanggroep Evergreen Vierlingsbeek</span>
			</h1>
        </div>

	    @include('layouts.nav')

        <div id="main">

            <div id="main1">
                <div class="container">
                    @yield('content')
                </div>
            </div>

            <div id="bottommain">
                @include('layouts.footer')
            </div>

        </div>
		<script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
        <script src="{{ asset('css/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </body>
</html>
