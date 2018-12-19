<!DOCTYPE html>
<html>
<head>
	<title>Controle de Estoque</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Listagem de Produtos</h1>

		<table class="table table-striped table-bordered table-hover">
			<th>Nome</th>
			<th>Valor</th>
			<th>Descrição</th>
			<th>Quantidade</th>
			<th>Detalhes</th>
			<?php foreach($produtos as $key): ?>
			<tr>
				<td><?= $key->nome ?></td>
				<td><?= $key->valor ?></td>
				<td><?= $key->descricao ?></td>
				<td><?= $key->quantidade ?></td>
				<td>
					<a href="/produtos/mostra?id=<?= $key->id ?>" >
						<i class="fas fa-search"></i>
					</a>
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
</body>
</html>