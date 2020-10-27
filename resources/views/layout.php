<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('titulo-pagina')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">@yield('header')</a>
</nav>
	<h1>@yield('conteudo')</h1>

	<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.js')}}"></script>




</body>
</html>