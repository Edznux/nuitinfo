<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{{ URL::to( '/') }}}">Actus</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="menu" href="{{{ URL::to( '/map') }}}">Map</a></li>
		    <li><a class="menu" href="{{{ URL::to( '/rules') }}}">Règles</a></li>
       <!-- <li><a class="menu" href="{{{ URL::to( '/actu') }}}">Actus</a></li>-->
        <li><a class="menu" href="{{{ URL::to( '/messages') }}}">Messages</a>
       @if(isset($user))
        @if($user->id)
          <li><a class="menu" href="{{{ URL::to( '/position') }}}">Position</a>
			<li><a class="menu" href="{{{ URL::to( '/moderer') }}}">Modérer</a>
        @endif
      @endif
      
	   <ul class="nav navbar-nav navbar-right">
		      <li><a class="menu" href="{{{ URL::to( '/login') }}}">Login</a>
			  <li><a href="/enfants"><img src="/image/emo-peur.png" class="imageEnfant"/></a></li>
		</ul>
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="imagehaut"></div>
<!-- 
<?php
    echo var_dump(Session::all());
    echo var_dump(Auth::check());
 ?>
-->
