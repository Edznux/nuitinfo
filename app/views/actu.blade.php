@extends('layouts.basic')


@section('content')
@if(Session::has('success'))
<h3>Merci de votre fucking message !</h3>
@else
<div id ="pagetitle"><header>Actualités</header></div>

<div id="message" >

	<a class="twitter-timeline" href="hashtag/nuitinfo2015" data-widget-id="672511905999798272"  height="100%" width="100%"></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
if(!d.getElementById(id)){js=d.createElement(s);
js.id=id;
js.src=p+"://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);
}}(document,"script","twitter-wjs");
</script>
</div>
<div id="maps"></div>
@endif

@stop
