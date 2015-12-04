@extends('layouts.basic')

@section('content')
	@if(Session::has('success'))
		<h3>Modification éffectuée</h3>
	@endif
	<h3>Modérer des messages</h3>

	<form action="" method="post">
		<table>
			@foreach($messages as $message)
				<tr> 
						<td>{{{$message->message}}} </td>
						<td><input type="submit" name="m{{{$message->id}}}" value="Modifier"></td>
						<td><input type="submit" name="s{{{$message->id}}}" value="Supprimer"></td>
				</tr>
			@endforeach
		</table>
	</form>
@stop