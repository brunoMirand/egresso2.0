@extends('layouts.headerPrincipal')
@section('conteudo')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h3 class="title-5 m-b-35"><i class="fas fa-users"></i> Consultar Alunos</h3>
			</div>
		</div>
	</div>
	<div class="col-12 col-md-9">
		<form class="form-header" action="listagem-alunos.php" method="GET">
			<input class="form-header" type="text" name="pesquisar" placeholder="pesquisar por nome &amp; RA..." autocomplete="off" />
				<select name="anos_id" id="select" class="form-control">
					<option disabled selected>Filtro por ano</option>
					<option value=""></option>
				</select>
				<select name="cursos_id" id="select" class="form-control">
					<option disabled selected>Filtro por Curso</option>
					<option value=""></option>
				</select>
				<button class="au-btn--submit" type="submit">
					<i class="zmdi zmdi-search"></i>
				</button>
			</form>
		</div>
			<div class="row m-t-30">
				<div class="col-md-12">
					<div class="table-responsive m-b-40">
					@if(old('nome'))
						<div class="alert alert-primary" role="alert">
							Aluno {{ old('nome') }} adicionando com sucesso
						</div>
					@endif
						<table class="table table-borderless table-data3 ">
							<thead>
								<tr>
									<th>FOTO</th>
									<th>RA</th>
									<th>NOME</th>
									<th>CPF</th>
									<th>CURSO</th>
									<th>EMAIL</th>
									<th>TELEFONE</th>
									<th>ANO</th>
									<th>SEMESTRE</th>
									<th>CIDADE</th>
									<th>STATUS</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<p class="text text-right">  {{ $contarAlunos = count($alunos) }} Registros </p>
								@foreach($alunos as $aluno)
								<tr>
									<td><img src="/images/{{$aluno->foto}}" style="height: 55px; width: 70px;" title="sua foto"></td>
									<!-- <td><img src='data:image/png;base64,{{$aluno->foto}}' style="height: 55px; width: 70px;" title="sua foto"></td> -->
									<td>{{ $aluno->RA }} </td>
									<td>{{ $aluno->nome }} </td>
									<td>{{ $aluno->cpf }} </td>
									<td>{{ $aluno->curso }} </td>
									<td>{{ $aluno->email }} </td>
									<td>{{ $aluno->telefone }} </td>
									<td class="text-center">{{ $aluno->ano }} </td>
									<td>{{ $aluno->semestre }} </td>
									<td>{{ $aluno->cidade }} </td>
									<td class="text-center process">{{ $aluno->status }}</td>
									<td><a href="/alunos/frequencia/{{ $aluno->id }}&{{ $aluno->RA }}" class="btn btn-success" role="button" aria-label="Ver frequência do aluno"><i aria-hidden="true">Frequencia</i> </td>
									<td>
										<form action="#" method="POST">
											<input type="hidden" name="id" value="">
											<button class="btn btn-danger"><i class="fa fa-close"></i> </button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					{{ $alunos->links() }}
@stop