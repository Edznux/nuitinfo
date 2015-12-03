@extends('layouts.basic')


@section('content')
	<h3>Envoie de messages</h3>
	<p>
		Si vous avez des événements qui ne sont pas encore sur notre fil d'actualité, n'hésitez pas à nous en faire part. Ici nous sommes à votre écoute.

	</p>	
	<form id="messages" method="post" action="">
		Localisation :
		<select>
			<option value="Pau">Pau</option>
		  	<option value="Paris">Paris</option>
		  	<option value="Bayonne">Bayonne</option>
		  	<option value="Bordeaux">Bordeaux</option>
		</select>
		</br>
		<button type="button">Ajouter une ville</button>
		</br>
		Message : <textarea name="message" rows="20" cols="100">Que ce passe t'il en ce moment</textarea>
		<input type="Submit" name="envoie" value="Envoyer">
	</form>
@stop