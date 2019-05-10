@php ($foto = $dados['dadosDoAluno']['foto'])
@php ($nome = $dados['dadosDoAluno']['nome'])
<div class="col-md-4">
    <aside class="profile-nav alt">
        <section class="card">
            <div class="card-header user-header alt bg-dark">
                <div class="media">
                    <a href="#">
                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src='data:image/png;base64,{{ $foto }}'>
                    </a>
                    <div class="media-body">
                        <h2 class="text-light display-6">{{ $nome }}</h2>
                        <p>Fatec Barueri</p>
                    </div>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="#">
                        <i class="fa fa-tasks"></i> RA: 00000000000
                        <span class="badge badge-primary pull-right">OK</span>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <i class="fa fa-tasks"></i> CPF: 000000000000000
                        <span class="badge badge-danger pull-right">OK</span>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <i class="fa fa-tasks"></i> Notification
                        <span class="badge badge-success pull-right">11</span>
                    </a>
                </li>
            </ul>
            <div class="card-body">
                <div class="mx-auto d-block">
                </div>
            </div>

        </section>
    </aside>
</div>