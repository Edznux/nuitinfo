@extends('layouts.basic')

@section('content')
	@if(Session::has('success'))
		<h3>Modification éffectuée</h3>
	@endif
	<h3>Modérer des messages</h3>

	@foreach($messages as $message)
		<table>
			{{ Form::open(array('url'=>"/moderer/$message->id") )}}		
			<tr> 
				<td>{{{$message->message}}} </td>
				<td>{{{$message->active}}} </td>
				<td><input type="submit" name="modifier" value="Modifier"></td>	
				<td><input type="submit" name="supprimer" value="Supprimer"></td>
				
			</tr>
			{{ Form::close() }}
		</table>
	@endforeach
@stop