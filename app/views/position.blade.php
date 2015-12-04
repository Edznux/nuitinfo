@extends('layouts.basic')


@section('content')
	@if(Session::has('success'))
		<h3>Position ajoutée</h3>
	@endif
	<h3>Ajout d'une position</h3>

	{{ Form::open() }}
		Nom ville :
		<input name="ville">
		</br></br>
		Latitude :
		<input name="lat">
		</br></br>
		Longitude :
		<input name="long">
		</br></br>
		<input type="Submit" name="envoie" value="Envoyer">
	{{ Form::close() }}
@stop