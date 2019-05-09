@php ($nome = $dados['dadosDoAluno']['nome'])
@php ($foto = $dados['dadosDoAluno']['foto'])
@php ($curso = $dados['dadosDoAluno']['cursos_id'])
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-user"></i>
            <strong class="card-title pl-2">Perfil Aluno {{ $nome }}</strong>
        </div>
        <div class="card-body">
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" src='data:image/png;base64,{{ $foto }}' alt="Foto do aluno">
                <h5 class="text-sm-center mt-2 mb-1">{{ $nome }}</h5>
                <div class="location text-sm-center">
                    <i class="fa fa-map-marker"></i> {{ $curso }}</div>
            </div>
            <hr>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-user"></i>
            <strong class="card-title pl-2">Frequência do Aluno {{ $nome }}</strong>
        </div>
        <div class="card-body">
            <div class="mx-auto d-block">
            <canvas id="#"></canvas>
            </div>
            <hr>
        </div>
    </div>
</div>
