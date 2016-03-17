<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h2>Wellcome! {{$authUser->name}}</h2>
	<img src="{{$authUser->avatar}}">
	<p>You has logged with google account</p>
	<a href="/logout">Cerrar sesion</a>
</body>
</html>