@extends('layouts.cabecalhoPrincipal')

@section('conteudo')
  <h1 class="text-center">Alunos</h1>
  	@if(old('nome'))
  		<div class="alert alert-primary" role="alert">
        	Aluno {{ old('nome') }} adicionando com sucesso
		</div>
	@endif
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
					<a class="btn btn-success" href="/alunos/frequencia/{{ $aluno->id }}">Frequência<span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
					<a class="btn btn-danger" href="/alunos/remove/{{ $aluno->id }}"><strong aria-hidden="true">X</strong></a>
				</td>
			</tr>
		</tbody>
		@endforeach
	<table>
@stop