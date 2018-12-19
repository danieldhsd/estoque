@extends('principal')

@section('conteudo')
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
		
		@if(empty($produtos))
		
		<div class="alert alert-danger">
			Você não tem produtos cadastrados!!
		</div>
		
		@else
			<h1>Listagem de Produtos</h1>

			<table class="table table-striped table-bordered table-hover">
				<th>Nome</th>
				<th>Valor</th>
				<th>Descrição</th>
				<th>Quantidade</th>
				<th>Detalhes</th>
				
				@foreach($produtos as $key)
				
				<tr class="{{$key->quantidade <=1 ? 'table-danger' : 'table-primary'}}">
					<td> {{$key->nome}} </td>
					<td> {{$key->valor}} </td>
					<td> {{$key->descricao}} </td>
					<td> {{$key->quantidade}} </td>
					<td>
						<a href="/produtos/mostra/{{$key->id}}" >
							<i class="fas fa-search"></i>
						</a>
					</td>
				</tr>
				
				@endforeach
			
			</table>
		
		@endif

@stop