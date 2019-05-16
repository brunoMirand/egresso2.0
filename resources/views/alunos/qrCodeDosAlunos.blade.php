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
    @for ($i = 0; $i < count($dados['qrcode']); $i++)
    <div class="col-md-4">
        <aside class="profile-nav alt">
            <section class="card-group">
                <div class="card-header user-header alt bg-dark">
                    <div class="media">
                        <a href="#">
                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{$dados['qrcodeDados']}}">
                        </a>
                        <div class="media-body">
                            <h2 class="text-light display-6">FATEC BARUERI</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" style="width: 210px; height: 210px; padding: 2px 2px 2px 2px;" src="{{$dados['qrcodeDados']}}" alt="">
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <ul class="list-group list-group-flush" style="padding: 0px;">
                                <li class="list-group-item" style="padding: 0px;">
                                    <i class="fa fa-tasks"></i> RA:
                                </li>
                                <li class="list-group-item" style="padding: 0px;">
                                    <i class="fa fa-tasks"></i> CPF:
                                </li>
                                <li class="list-group-item" style="padding: 0px;">
                                    <i class="fa fa-tasks"></i> CURSO:
                                </li>
                                <li class="list-group-item" style="padding: 0px;">
                                    <i class="fa fa-tasks"></i> CIDADE:
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
                <div class="">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Imprimir Carteirinha</button>
                </div>
        </aside>
    </div>
    <br>
    @endfor
@stop