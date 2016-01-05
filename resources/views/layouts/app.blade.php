<!DOCTYPE html>
<html lang="en">

	<head>
		@include('layouts.header')
	</head>

<body>

	<nav class="navbar navbar-default">
		@include('layouts.nav')
	</nav>

	<div class="container">
		<div class="row">
			@yield('content')
		</div>
	</div>

</body>

	<footer>
		@include('layouts.footer')
	</footer>

</html>