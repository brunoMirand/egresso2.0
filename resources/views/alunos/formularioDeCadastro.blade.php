@extends('layouts.headerPrincipal')

@section('conteudo')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Formulario de Cadastro</strong> Alunos
                        </div>
                        <div class="card-body card-block">
                            <form action="/alunos/cadastro" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group">
                                    <label for="exampleInputEmail1">RA</label>
                                    <input type="text" name="RA" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu RA">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nome</label>
                                    <input type="text" name="nome" class="form-control" id="exampleInputPassword1" placeholder="Digite seu nome">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">CPF</label>
                                    <input type="text" name="CPF" class="form-control" id="exampleInputPassword1" placeholder="Digite seu CPF">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Digite seu email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Telefone</label>
                                    <input type="text" name="telefone" class="form-control" id="exampleInputPassword1" placeholder="Digite seu telefone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Foto</label>
                                    <input type="file" name="foto" accept="image/*" class="form-control" id="exampleInputPassword1" placeholder="Digite seu nome">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Curso</label>
                                    <input type="text" name="cursos_id" class="form-control" id="exampleInputPassword1" placeholder="Digite seu nome">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ano</label>
                                    <input type="text" name="anos_id" class="form-control" id="exampleInputPassword1" placeholder="Digite seu nome">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Semestre</label>
                                    <input type="text" name="semestres_id" class="form-control" id="exampleInputPassword1" placeholder="Digite seu nome">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Cidade</label>
                                    <input type="text" name="cidades_id" class="form-control" id="exampleInputPassword1" placeholder="Digite seu nome">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Situação da matricula</label>
                                    <input type="text" name="matricula_id" class="form-control" id="exampleInputPassword1" placeholder="Digite seu nome">
                                </div>
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop