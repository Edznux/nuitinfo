@extends('layouts.basic')


@section('content')
	contenu de ma variable injecté depuis le controller :
	{{{ $other }}}
	<br />	
	variable inexistante : {{{ $MaVariableQuiNExistePasACZDQ or "je n'existe pas" }}}
	<br />

	ceci est la main section de la page de base (extends de layout.basic)
@stop
