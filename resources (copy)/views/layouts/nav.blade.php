<div class="container">
	<div class="navbar-header">
		<!-- Collapsed Hamburger -->
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
			<span class="sr-only"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<a class="navbar-brand" href="{{ url('/') }}">
			BRAND
		</a>
	</div>

	<div class="collapse navbar-collapse" id="spark-navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="{{ action('PagesController@about') }}">About</a></li>
			<li><a href="{{ url('/tasks') }}">Tasks</a></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			@if (Auth::guest())
				<li><a href="{{ url('/login') }}">Login</a></li>
				<li><a href="{{ url('/register') }}">Register</a></li>
			@else
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<ul class="dropdown-menu" role="menu">
						<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
					</ul>
				</li>
			@endif
		</ul>
	</div>
</div>