@extends('layouts.headerFrequenciaAluno')

@section('conteudo')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
			<div class="row">
				@include('alunos.helper.dadosDoAluno')
				@include('alunos.helper.dadosTabelaDoAluno')
				@include('alunos.helper.dadosProgressoDiario')
				@include('alunos.helper.carteirinhaEscolar')
				@include('alunos.helper.dadosFiltrosMes')
				@include('alunos.helper.dadosTabelaGeral')
			</div>
		</div>
	</div>
</div>
@stop