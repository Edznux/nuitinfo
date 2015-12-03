@extends('layouts.basic')

@section('content')
	hueheuhe
	Cette page n'est accessible uniquement si l'user est connecté !
		<br>

	vous etes connecter en temps que : {{{ $user->first_name }}}

@stop
