@extends('layouts.basic')


@section('content')
<h1>Localisation</h1></div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
	<script>
	var position = {{ $position }}
	</script>
	<div id="map"></div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>

@stop