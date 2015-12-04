@extends('layouts.basic')

@section('content')
	@if(Session::has('success'))
		<h3>Modification éffectuée</h3>
	@endif
	<h3>Modérer des messages</h3>

	@foreach($messages as $message)
		<table width="50%" border=1>
			<tr> 
				<td>{{{$message->message}}} </td>
				{{ Form::open(array('url'=>"/moderer/$message->id") )}}		
							<td><input type="submit" name="modifier" value="Modifier"></td>
				{{ Form::close() }}

				{{ Form::open(array('url'=>"/moderer/$message->id") )}}		
							<td><input type="submit" name="supprimer" value="Supprimer"></td>
				{{ Form::close() }}
			</tr>
		</table>
	@endforeach
@stop