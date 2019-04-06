@extends('layouts.cabecalhoPrincipal')

@section('conteudo')
  <h1 class="text-center">Frequência</h1>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">Mes</th>
				<th scope="col">Dia</th>
				<th scope="col">Horário</th>
			</tr>
		</thead>
		<tbody>
		@foreach($frequencias as $frequencia)
			<tr>
				<td>{{ $frequencia->nome }}</td>
				<td>{{ $frequencia->mes }}</td>
				<td>{{ $frequencia->dia }}</td>
				<td>{{ $frequencia->horario }}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@stop