<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<title>Listagem de Alunos</title>
</head>
<body>
  <h1 class="text-center">Alunos</h1>
    <table class="table table-dark">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Email</th>
					<th scope="col">CPF</th>
				</tr>
			</thead>
    	<?php foreach($alunos as $aluno): ?>
			<tbody>
				<tr>
					<td scope="row"><?= $aluno->nome ?></td>
					<td scope="row"><?= $aluno->email ?></td>
					<td scope="row"><?= $aluno->cpf ?></td>
					<td scope="row">
						<a class="btn btn-success" href="/alunos/frequencia/<?= $aluno->id ?>">Frequência</a>
					</td>
				</tr>
			</tbody>
    	<?php endforeach ?>
    <table>
</body>
</html>