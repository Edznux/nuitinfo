@extends('layouts.basic')

@section('content')
	@if(Session::has('success'))
		<h3>Modification éffectuée</h3>
	@endif
	<h3>Modérer des messages</h3>

	<table>
		@foreach($messages as $message)
			<tr> 
					<td>{{{$message->message}}} </td>
					<td><button type="button" name="modifier">Modifier</button></td>
					<td><button type="button" name="supprimer">Supprimer</button></td>
			</tr>
		@endforeach
	</table>
@stop