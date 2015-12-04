@extends('layouts.basic')


@section('content')
	@if(Session::has('success'))
		<h3>Position ajoutée</h3>
	@endif
	<h3>Ajout d'une position</h3>

	{{ Form::open() }}
		Nom ville :
		<input name="ville">
		</br>
		Latitude :
		<input name="lat">
		</br>
		Longitude :
		<input name="long">
		</br>
		<input type="Submit" name="envoie" value="Envoyer">
	{{ Form::close() }}
@stop