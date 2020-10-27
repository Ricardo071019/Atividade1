@extends('layout')
@section('titulo-pagina')
RikAgency
@endsection
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-with, initial-scale=-1, shrink-to-fit-no"name=viewport">
<title>Exemplo de Bootstrap</title>
<link href="css/Bootstrap.min.css"rel="stylesheet">
</head>
@section('header')
Entre em contacto connosco
@endsection 
<body>
	<br><br><br><img src="https://www.pintolopesviagens.com/plv_conteudos/uploads/2020/01/Sabores-Lisboa-VA-400x260.jpg" alt="">
	<img src="https://www.pintolopesviagens.com/plv_conteudos/uploads/2018/01/Heranca-Judaica-em-Portugal_VA-400x260.jpg" alt="">
	<img src="https://www.pintolopesviagens.com/plv_conteudos/uploads/2020/02/Malta-com-ilha-de-gozo-400x260.jpg" alt="">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">RikAgency</a>
</nav>
</body>
<form>

	<br><label for="nome">Nome</label>
	<input type="text" name="nome">
	<br>

	<br><label for="NIF">NIF</label>
	<input type="text" name="NIF">
	<br>

	<br><label for="Telefone">Telefone</label>
	<input type="text" name="Telefone">
	<br>

	<br><label for="Passageiros">Passageiros</label>
	<input type="text" name="Numero de pessoas">
	<br>

	<br><button type="submit">Enviar</button>
</form>	

@section('conteudo')
@endsection							
