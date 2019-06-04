@extends('layouts.headerPrincipal')

@section('conteudo')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Formulario de Cadastro</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="/alunos/cadastro" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class="form-control-label">RA do Aluno</label>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="text" id="text-input" name="RA" placeholder="Digite o RA do aluno" class="form-control" required maxlength="9" autofocus>
                                        <small class="form-text text-muted">Preencha este campo</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class="form-control-label">Nome & Sobrenome</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="nome" placeholder="Digite o nome e sobrenome" class="form-control " required>
                                        <small class="form-text text-muted">Preencha este campo</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class="form-control-label">CPF do Aluno</label>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="text" id="text-input" name="CPF" placeholder="Digite o CPF do aluno" class="form-control" required maxlength="11" autofocus>
                                        <small class="form-text text-muted">Preencha este campo</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class="form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email" placeholder="Digite o email" class="form-control" required>
                                        <small class="help-block form-text">Preencha o campo email</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="telefone" class=" form-control-label">Telefone</label>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="text" id="telefone" name="telefone" placeholder="Telefone do aluno" class="form-control" required maxlength="11">
                                        <small class="help-block form-text">Preencha este campo </small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="valor" class="form-control-label">Foto</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="valor" name="foto" placeholder="" class="form-control" accept="image/*" required>
                                        <small class="help-block form-text">Insera a foto do aluno </small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class="form-control-label">Curso</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select  name="cursos_id" id="select" class="form-control" >
                                            <option disabled selected required>Selecione o Curso</option>
                                            @foreach($dados['cursos'] as $curso)
                                                <option value="{{ $curso->id }}" required>
                                                    {{ $curso->curso }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class="form-control-label">Ano</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select  name="anos_id" id="select" class="form-control" >
                                            <option disabled selected required>Selecione o Ano</option>
                                            @foreach($dados['anos'] as $ano)
                                                <option value="{{ $ano->id }}" required>
                                                    {{ $ano->ano }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class="form-control-label">Semestre</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select  name="semestres_id" id="select" class="form-control" >
                                            <option disabled selected required>Selecione o Semestre</option>
                                            @foreach($dados['semestres'] as $semestre)
                                                <option value="{{ $semestre->id }}" required>
                                                    {{ $semestre->semestre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class="form-control-label">Cidade</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select  name="cidades_id" id="select" class="form-control" >
                                            <option disabled selected required>Selecione a Cidade</option>
                                            @foreach($dados['cidades'] as $cidade)
                                                <option value="{{ $cidade->id }}" required>
                                                    {{ $cidade->cidade }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class="form-control-label">Situação da Matricula</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select  name="matricula_id" id="select" class="form-control" >
                                            <option disabled selected required>Selecione o Status da Matricula</option>
                                            @foreach($dados['status'] as $status)
                                                <option value="{{ $status->id }}" required>
                                                    {{ $status->status }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop