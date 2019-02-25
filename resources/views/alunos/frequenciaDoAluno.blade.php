@extends('layouts.cabecalhoPrincipal')

@section('conteudo')
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
				<td>{{ $frequencias->nome }}</td>
				<td>{{ $frequencias->MES  }}</td>
				<td>{{ $frequencias->DIA  }}</td>
			</tr>
		</tbody>
	<table>
@stop