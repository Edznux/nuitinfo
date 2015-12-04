@extends('layouts.basic')


@section('content')
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
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
		<textarea name="message" class="col-lg-8 col-md-8 col-sm-8 col-xs-8 placeholder="Que se passe-t-il en ce moment ?"</textarea>
		</br></br>
		<input type="Submit" name="envoie" value="Envoyer">
	{{ Form::close() }}
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
@stop