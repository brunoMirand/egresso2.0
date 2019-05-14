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
                        <h2 class="text-light display-6">FATEC BARUERI</h2>
                        <p>{{ $nome }}</p>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top" style="width: 210px; height: 210px;" src='data:image/png;base64,{{ $foto }}' alt="Card image cap">
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $nome }}</h5>
                        <ul class="list-group list-group-flush" style="padding: 0px;">
                            <li class="list-group-item" style="padding: 0px;">
                                <i class="fa fa-tasks"></i> RA: 00000000000
                            </li>
                            <li class="list-group-item" style="padding: 0px;">
                                <i class="fa fa-tasks"></i> RA: 00000000000
                            </li>
                            <li class="list-group-item" style="padding: 0px;">
                                <i class="fa fa-tasks"></i> RA: 00000000000
                            </li>
                            <li class="list-group-item" style="padding: 0px;">
                                <i class="fa fa-tasks"></i> RA: 00000000000
                            </li>
                            <li class="list-group-item" style="padding: 0px;">
                                <i class="fa fa-tasks"></i> RA: 00000000000
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </aside>
</div>