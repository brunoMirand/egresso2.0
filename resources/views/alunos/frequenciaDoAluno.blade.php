@extends('layouts.cabecalhoPrincipal')

@section('conteudo')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
			<div class="row">
				@include('alunos.frequencias.dadosDoAluno')
				@include('alunos.frequencias.dadosTabelaDoAluno')
				@include('alunos.frequencias.dadosProgressoDiario')
				@include('alunos.frequencias.dadosFiltrosMes')
				@include('alunos.frequencias.dadosTabelaGeral')
			</div>
		</div>
	</div>
</div>
@stop