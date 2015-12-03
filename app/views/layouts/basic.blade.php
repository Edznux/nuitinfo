<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Nuit Info 2015 uppa</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	
	<link rel="stylesheet" href="/css/main.css">
<!--	<link rel="stylesheet" href="/css/test.css">-->



</head>
<body>
<a href="/enfants"><img src="/image/emo-peur.png" class="imageEnfant"/></a>
	{{-- On inclus le menu dans le layout de base --}}
	@include('partials.menu')

	<h1>Projet nuit info blabal</h1>
	@yield('content')

	<!--{{}}-->
	<hr>
	<footer  > <img id="centerImage" src="/image/numero-urgence.png"></img></footer>
	<!-- jquery :'( -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<!-- google map api -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj5sJZH_ZAIG8RXTLgoo26FB0RyrfS4eA&callback=initMap">
    </script>

	<!-- // ajout du script de map -->
	<script src="/js/map.js"></script>

	<!-- custom scripts here -->
	<script src="/js/main.js"></script>
</body>
</html>
