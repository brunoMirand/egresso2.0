<div class="col-md-4">
    <div class="card">
        <div class="card-header">
        <i class="fa fa-user"></i>
            <strong class="card-title pl-2">Perfil Diário do mes</strong>
        </div>
        <div class="card-body">
        @foreach($dados['frequenciaDiariaDoMes'] as $frequencia)
            <code><strong>Dia: </strong>{{ $frequencia->dia }}</code>
            <div class="progress mb-2">
                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width:{{$frequencia->quantidade + 5}}%" aria-valuenow="{{ $frequencia->quantidade }}%" aria-valuemin="1" aria-valuemax="100">{{ $frequencia->quantidade }}%</div>
            </div>
        @endforeach
            <hr>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-user"></i>
            <strong class="card-title pl-2">Frequência do Alunos</strong>
        </div>
        <div class="card-body">
            <div class="mx-auto d-block">
            <canvas id="team-chart"></canvas>
        </div>
        <hr>
        </div>
    </div>
</div>