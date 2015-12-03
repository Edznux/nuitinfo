@extends('layouts.basic')


@section('content')
	<script>
	var position = {{ $position }}
	</script>
	<div id="map" style="width: 300px; height: 400px"></div>

@stop