@extends('layouts.basic')

@section('content')
	@if(Session::has('success'))
		<h3>Modification éffectuée</h3>
	@endif
	<h3>Modérer des messages</h3>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
<div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
	@foreach($messages as $message)
		{{ Form::open(array('url'=>"/moderer/$message->id") )}}
			<table width="50%" border=1>
				<tr> 
					<td width="40%" height="10%">{{{$message->message}}} </td>
					<td width="20%" height="10%">{{{$message->active ? "activé" : "desactivé" }}} </td>
					<td width="20%" height="10%"><input type="submit" name="modifier" value="Modifier"></td>	
					<td width="20%" height="10%"><input type="submit" name="supprimer" value="Supprimer"></td>
					
				</tr>
			</table>	
		{{ Form::close() }}
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	@endforeach
@stop