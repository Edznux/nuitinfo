@extends('layouts.basic')

@section('content')
	@if(Session::has('success'))
		<h3>Modification éffectuée</h3>
	@endif
	<h3>Modérer des messages</h3>

	@foreach($messages as $message)
		<table>
			<tr> 
				<td>{{{$message->message}}} </td>
				<form action="/moderer/{{{$message->id}}}" method="post">
			
							<td><input type="submit" name="modifier" value="Modifier"></td>
				</form>
				<form action="/moderer/{{{$message->id}}}" method="post">
							<td><input type="submit" name="supprimer" value="Supprimer"></td>

				</form>
			</tr>
		</table>
	@endforeach
@stop