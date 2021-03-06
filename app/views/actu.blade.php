@extends('layouts.basic')


@section('content')
@if(Session::has('success'))
<h3>Merci de votre message !</h3>
@endif

    <script type="text/javascript" src="js/lib-egg.js"></script>
    <script type="text/javascript" src="js/lib-jQuery.js"></script>
    <script type="text/javascript" src="js/lib-phaser.min.js"></script>
    <script type="text/javascript" src="js/easterEgg.js"></script>

<h1>Actualités</h1></div>

<div id="message" >
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
<div class="col-lg-5 col-md-5 col-sm-11 col-xs-11">
	<a class="twitter-timeline" href="hashtag/nuitinfo2015" data-widget-id="672511905999798272"  height="100%" width="100%"></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
if(!d.getElementById(id)){js=d.createElement(s);
js.id=id;
js.src=p+"://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);
}}(document,"script","twitter-wjs");
</script>
</div>
<div class="col-lg-5 col-md-5 col-sm-11 col-xs-11">
<script>
	var position = {{ $position }}
	</script>
	<div id="map" class="map-actu"></div>
	<br><br><br>
	<div class="messages" id="cadre">
		@foreach($messages as $mes)
				{{{$mes->message}}}
				</br>
		@endforeach
</div>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>


        <div id="gameId"> </div>



@stop
