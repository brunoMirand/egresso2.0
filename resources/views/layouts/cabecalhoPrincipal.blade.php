<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link href="/css/custom.css" type="text/css" rel="stylesheet">
	<title>Listagem de Alunos</title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Egresso</a>
			</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ action('HomeController@index') }}">Voltar</a></li>
				</ul>
			</div>
		</nav>

	@yield('conteudo')

	<footer class="footer">
    <p>© TUDO CERTO E NADA RESOLVIDO!</p>
  </footer>
  </div>
</body>
</html>