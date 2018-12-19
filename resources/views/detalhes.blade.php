@extends('principal')

@section('conteudo')
		<h1>Detalhes do produto: <?= $key->nome ?></h1>
		<ul>
			<li>
				<b>Valor:</b> R$ {{$key->valor}}
			</li>
			<li>
				<b>Descrição:</b> {{$key->descricao}}
			</li>
			<li>
				<b>Quantidade em Estoque:</b> {{$key->quantidade}}
			</li>
		</ul>
@stop