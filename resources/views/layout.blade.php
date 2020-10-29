<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rika Agency</title>
	<link rel="stylesheet" type="text/css" href="{{asset('CSS/bootstrap.min.css')}}">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<a class="navbar-brand" href="#">@yield('header')</a>
	<div class="collapse-navbar-collapse" id="navbarsExampleDefault">
	<ul class="navbar-nav mr-auto">
	<li class="navbar-nav mr-auto">
	<a class="nav-link" href="viagens">Viagens <span class="sr-only">(atual)</span></a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="Localidade">Localidade</a>
	</li>
	<li class="nav-item">
	<a class="nav-link disable" href="contacto">Contacto</a>
	</li>
	</nav>

</head>
<body>

	<h1>@yield('conteudo')</h1>


	<script src="{{asset('JS/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('JS/bootstrap.js')}}"></script>





</body>
</html>