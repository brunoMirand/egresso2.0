<div class="table-responsive table-data">
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>RA</th>
                    <th>NOME</th>
                    <th>status</th>
                    <th class="text-center">MES</th>
                    <th class="text-center">DIA</th>
                    <th class="text-center">HORARIO</th>
                </tr>
            </thead>
            <tbody>
                <p class="text text-right"> Registros </p>
                @foreach($dados['frequenciaDiaria'] as $frequencia)
                <tr>
                    <td>{{ $frequencia->RA }}</td>
                    <td>{{ $frequencia->nome }}</td>
                    <td>{{ $frequencia->matricula_id }}</td>
                    <td class="text-center">{{ $frequencia->mes }}</td>
                    <td class="text-center">{{ $frequencia->dia }}</td>
                    <td class="text-center">{{ $frequencia->horario }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

