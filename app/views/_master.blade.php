<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','Dev Best Friend')</title>
	<meta charset='utf-8'>

	@yield('head')
	
</head>
<body>

	<nav>
		<u1>
			<li><a href = 'lorem-ipsum'> Lorem Ipsum Generator </a></li>
			<li><a href = 'users'> Generate Profiles </a></li>
		</u1>
	</nav>

	@yield('content')

	@yield('body')
	
</body>
</html>