@php ($foto = $dados['dadosDoAluno']['foto'])
@php ($nome = $dados['dadosDoAluno']['nome'])
@php ($RA = $dados['dadosDoAluno']['RA'])
@php ($curso = $dados['dadosDoAluno']['curso'])
@php ($cpf = $dados['dadosDoAluno']['cpf'])
@php ($cidade = $dados['dadosDoAluno']['cidade'])
<div class="col-md-4">
    <aside class="profile-nav alt">
        <section class="card">
            <div class="card-header user-header alt bg-dark">
                <div class="media">
                    <a href="#">
                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="/images/{{$foto}}">
                    </a>
                    <div class="media-body">
                        <h2 class="text-light display-6">FATEC BARUERI</h2>
                        <p>{{ $nome }}</p>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top" style="width: 210px; height: 210px; padding: 2px 2px 2px 2px;" src="/images/{{$foto}}" alt="Card image cap">
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $nome }}</h5>
                        <ul class="list-group list-group-flush" style="padding: 0px;">
                            <li class="list-group-item" style="padding: 0px;">
                                <i class="fa fa-tasks"></i> RA: {{ $RA }}
                            </li>
                            <li class="list-group-item" style="padding: 0px;">
                                <i class="fa fa-tasks"></i> CPF: {{ $cpf }}
                            </li>
                            <li class="list-group-item" style="padding: 0px;">
                                <i class="fa fa-tasks"></i> CURSO: {{ $curso }}
                            </li>
                            <li class="list-group-item" style="padding: 0px;">
                                <i class="fa fa-tasks"></i> CIDADE: {{ $cidade}}
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