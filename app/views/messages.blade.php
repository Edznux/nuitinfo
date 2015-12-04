@extends('layouts.basic')


@section('content')
	<h3>Envoie de messages</h3>
	<p>
		Si vous avez des événements qui ne sont pas encore sur notre fil d'actualité, n'hésitez pas à nous en faire part. Ici nous sommes à votre écoute.

	</p>	
	{{ Form::open() }}
		Localisation :
		<select name="ville">
			@foreach ($villes as $ville)
			    <option value="{{{ $ville->label }}}">{{{ $ville->label }}}</p>
			@endforeach
		</select>
		</br>
		
		Message : </br>
		<script>
			function clearContents(element) {
				element.value = '';
			}
		</script>
		<textarea name="message" rows="5" cols="100" onClick="clearContents(this);">Que se passe-t-il en ce moment ?</textarea>
		</br></br>
		<input type="Submit" name="envoie" value="Envoyer">
	{{ Form::close() }}
@stop