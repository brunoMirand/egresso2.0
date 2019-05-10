<div class="col-md-4">
    <div class="table-responsive table-data">
    <table class="table table-borderless table-striped table-earning">
        <thead>
            <tr>
                <th class="text-center">MES</th>
                <th class="text-center">DIA</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dados['mesDiaDeFrequencia'] as $frequencia)
            <tr>
                <td class="text-center">{{ $frequencia->mes }}</td>
                <td class="text-center">{{ $frequencia->dia }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
        <p class="text text-right">  Registros {{ count($dados['mesDiaDeFrequencia']) }}</p>
    </div>
</div>