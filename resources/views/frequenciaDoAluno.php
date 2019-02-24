<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<title>Frequência Escolar</title>
</head>
<body>
  <h1 class="text-center">Frequência</h1>
    <table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Mes</th>
					<th scope="col">Dia</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?= $frequencias->nome ?></td>
					<td><?= $frequencias->MES ?></td>
					<td><?= $frequencias->DIA ?></td>
				</tr>
			</tbody>
    <table>
</body>
</html>