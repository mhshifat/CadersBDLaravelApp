<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="/images/development.svg" rel="icon" type="image/svg">
  <title>CodersBD - Its about turning great ideas into WEB Solutions.........</title>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Vollkorn:400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link href="/css/lightbox.css" rel="stylesheet" type="text/css">
	<link href="/css/default.css" rel="stylesheet" type="text/css">
	<link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

	@if(count($errors) > 0)

		@foreach ($errors->all() as $error)

			<div id="error">{{ $error }}...</div>

		@endforeach

	@endif

	@if(Session::has('notice'))

		<div id="notice">{{ Session::get('notice') }}...</div>

	@endif

	@if(Session::has('error'))

		<div id="error">{{ Session::get('error') }}...</div>

	@endif

	@if(Session::has('success'))

		<div id="success">{{ Session::get('success') }}...</div>

	@endif

	@include('layouts.topNavbar')

	@include('layouts.leftNavbar')

	<section id="main">

		<div class="content">

			@yield('content')

		</div>

		@include('layouts.footer')

	</section>

{{--  JavaScript Area  --}}
	<script>
      function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 23.777176, lng: 90.399452},
          zoom: 12,
          styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4L_CGaFWoqNWUmDXzYmi6_rcuG_Slpso&callback=initMap">
    </script>
	<script src="/js/lightbox.js"></script>
	<script src="/js/main.js"></script>
	<script id="dsq-count-scr" src="//codersbd.disqus.com/count.js" async></script>
	@yield('JavaScript')
</body>
</html>
