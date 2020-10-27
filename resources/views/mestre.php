@extends('layout')
@section('titulo-pagina')
RikAgency
@endsection
@section('header')
RikAgencyxxxx
@endsection 
@section('conteudo')
<body>
	<br><br><br><img src="https://www.pintolopesviagens.com/plv_conteudos/uploads/2020/01/Sabores-Lisboa-VA-400x260.jpg" alt="">
	<img src="https://www.pintolopesviagens.com/plv_conteudos/uploads/2018/01/Heranca-Judaica-em-Portugal_VA-400x260.jpg" alt="">
	<img src="https://www.pintolopesviagens.com/plv_conteudos/uploads/2020/02/Malta-com-ilha-de-gozo-400x260.jpg" alt="">


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


@endsection							
