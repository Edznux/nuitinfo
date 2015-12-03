@extends('layouts.basic')


@section('content')
	<script>
	var location = {{ $position }}
	</script>
	<div id="map" style="width: 300px; height: 400px"></div>

@stop