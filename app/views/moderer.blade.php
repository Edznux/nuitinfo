@extends('layouts.basic')

@section('content')
	@if(Session::has('success'))
		<h3>Modification éffectuée</h3>
	@endif
	<h3>Modérer des messages</h3>

	@foreach($messages as $message)
		{{ Form::open(array('url'=>"/moderer/$message->id") )}}
			<table width="50%" border=1>
				<tr> 
					<td width="40%">{{{$message->message}}} </td>
					<td width="20%">{{{$message->active ? "activé" : "desactivé" }}} </td>
					<td width="20%"><input type="submit" name="modifier" value="Modifier"></td>	
					<td width="20%"><input type="submit" name="supprimer" value="Supprimer"></td>
					
				</tr>
			</table>	
		{{ Form::close() }}
	@endforeach
@stop