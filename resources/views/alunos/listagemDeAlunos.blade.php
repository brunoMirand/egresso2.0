@extends('layouts.cabecalhoPrincipal')

@section('conteudo')
  <h1 class="text-center">Alunos</h1>
	<table class="table table-dark">
		<thead>
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">Email</th>
				<th scope="col">CPF</th>
			</tr>
		</thead>
		<tbody>
		<p class="text text-right">{{ $contarAlunos = count($alunos) }}</p>
		@foreach($alunos as $aluno)
			<tr>
				<td scope="row">{{ $aluno->nome  }}</td>
				<td scope="row">{{ $aluno->email }}</td>
				<td scope="row">{{ $aluno->cpf  }}</td>
				<td scope="row">
					<a class="btn btn-success" href="/alunos/frequencia/{{ $aluno->id }}">Frequência</a>
				</td>
			</tr>
		</tbody>
		@endforeach
	<table>
@stop