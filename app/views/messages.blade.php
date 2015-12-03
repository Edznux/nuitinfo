@extends('layouts.basic')


@section('content')
	<h3>Envoie de messages</h3>
	<p>
		Si vous avez des eéénements qui ne sont pas encore sur notre fil d'actualité, n'hésitez pas à nous en faire part. Ici nous sommes à votre écoute.

	</p>	
	<form id="messages" method="post" action="">
		Localisation :
		<select>
			<option value="Pau">Pau</option>
		  	<option value="Paris">Paris</option>
		  	<option value="Bayonne">Bayonne</option>
		  	<option value="Bordeaux">Audi</option>
		</select> 
		<input> </input>
	</form>
@stop