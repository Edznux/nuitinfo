@extends('layouts.basic')


@section('content')
	@if (!empty($_POST))
		<h3>Message envoyé, merci de votre aide.</h3>
		{{{$_POST['message']}}}
	@else
		<h3>Envoie de messages</h3>
		<p>
			Si vous avez des événements qui ne sont pas encore sur notre fil d'actualité, n'hésitez pas à nous en faire part. Ici nous sommes à votre écoute.

		</p>	
		{{ Form::open() }}
			Localisation :
			<select>
				@foreach ($villes as $ville)
				    <option value="{{{ $ville->label }}}">{{{ $ville->label }}}</p>
				@endforeach
			</select>
			</br>
			
			Message : </br>
			<textarea name="message" rows="5" cols="100">Que ce passe-t-il en ce moment</textarea>
			</br></br>
			<input type="Submit" name="envoie" value="Envoyer">
		{{ Form::close() }}
	@endif
@stop