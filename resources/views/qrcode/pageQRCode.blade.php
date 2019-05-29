@extends('layouts.headerFrequenciaAluno')

@section('conteudo')
<body class="animsition">
    <div class="page-wrapper">
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <img src="#" alt="FATEC"/>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-container">
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <strong>FATEC BARUERI<strong>
                                <i class="fa fa-refresh"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <script>
                let scanner = new Instascan.Scanner({
                    video: document.getElementById('preview')
                });
                scanner.addListener('scan', (content) => {
                    var content = content;
                    console.log(content);
                    var lista = content.split(",");

                    $.ajax({
                        type: "POST",
                        data: {
                            nome: lista[0],
                            RA: lista[1],
                            curso: lista[2],
                            cpf: lista[3],
                            id: lista[5],
                            "_token": "{{ csrf_token() }}",
                        },
                        url: '/valida/id',
                        success: function(data) {
                            document.querySelector("[name='nome']").value = lista[0];
                            document.querySelector("[name='ra']").value = lista[1];
                            document.querySelector("[name='curso']").value = lista[2];
                            document.querySelector("[name='cpf']").value = lista[3];
                            document.querySelector("[name='email']").value = lista[4];
                            document.querySelector("[name='status']").value = data.status;

                            // let frequenciaEntrada = data.dataEntrada;
                            // let isAnoMesDiaEntrada = frequenciaEntrada.split(' ');
                            // let dataAnoMesDiaEntrada = isAnoMesDiaEntrada[0].split('-');
                            // let dataEntrada = isAnoMesDiaEntrada[1];

                            // let frequenciaSaida = data.dataSaida;
                            // let isAnoMesDiaSaida = frequenciaSaida.split(' ');
                            // let dataSaida = isAnoMesDiaSaida[1];
                            let nome = lista[0];
                            let diaAnterior = data.dataAnterior.dia;
                            let diaEntrada = data.dataEntrada.dia;
                            let horarioAnterior = data.dataAnterior.horario;
                            let horarioEntrada = data.dataEntrada.horario;
                            let imagem = data.imagem;

                            $("#nome").html(nome);
                            $("#diaAnterior").html(diaAnterior);
                            $("#diaEntrada").html(diaEntrada);
                            $("#dataAnterior").html(horarioAnterior);
                            $("#dataEntrada").html(horarioEntrada);
                            $(document).ready(() => {
                                $('#imagem').attr('src', '/images/' + imagem);
                            });
                            if (data.status !== "Ativo") {
                                $("#acesso").html('VERIFICAR ACESSO');
                                $("#acesso").css('background-color', '#ffa500');
                                $("#acesso").css('border-color', '#ffa500');
                                $("#status").css('background-color', '#F4A460');
                            } else {
                                $("#acesso").html('ACESSO LIBERADO');
                                $("#acesso").css('background-color', 'green');
                                $("#acesso").css('border-color', 'green');
                                $("#status").css('background-color', '#98FB98');
                            }

                        },
                        statusCode: {
                            404: (error) => {
                                document.querySelector("[name='nome']").value = 'NÃO ENCONTRADO';
                                document.querySelector("[name='ra']").value = 'NÃO ENCONTRADO';
                                document.querySelector("[name='curso']").value = 'NÃO ENCONTRADO';
                                document.querySelector("[name='cpf']").value = 'NÃO ENCONTRADO';
                                document.querySelector("[name='email']").value = 'NÃO ENCONTRADO';
                                document.querySelector("[name='status']").value = 'NÃO ENCONTRADO';
                                $(document).ready(() => {
                                    $('#imagem').attr('src', '/images/notfound.png');
                                });
                                $("#acesso").html('ACESSO NEGADO');
                                $("#acesso").css('background-color', 'red');
                                $("#acesso").css('border-color', 'red');
                                $("#nome").html(nome);
                                $("#diaAnterior").html('XX');
                                $("#diaEntrada").html('XX');
                                $("#dataAnterior").html('XXXXXX');
                                $("#dataEntrada").html('XXXXXXX');
                                console.log('error', error);
                            }
                        },
                        complete: (data) => {
                            console.log('complete', data);
                        },
                        dataType: 'json'
                    });

                    function refresh() {
                        window.location.reload(true);
                    }
                    // setTimeout(refresh, 2000);
                    // console.log(lista);
                    window.open(scanner.scanner, "_top");
                });

                Instascan.Camera.getCameras().then(cameras => {
                    if (cameras.length > 0) {
                        scanner.start(cameras[0]);
                    } else {
                        console.error("Não existe câmera no dispositivo!");
                    }
                });
            </script>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">Imagem do aluno</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="/images/fundo.jpg" id="imagem" alt="aluno fatec">
                                            <h5 class="text-sm-center mt-2 mb-1" id="nome">nome</h5>
                                            <div class="location text-sm-center">
                                                <i class="fa fa-map-marker"></i> FATEC BARUERI</div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                    <strong>Dados do Aluno</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="username" name="nome" placeholder="Nome" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="text" id="password" name="ra" placeholder="RA" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-pencil-square"></i>
                                                    </div>
                                                    <input type="text" id="email" name="curso" placeholder="Curso" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-credit-card"></i>
                                                    </div>
                                                    <input type="text" id="email" name="cpf" placeholder="CPF" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="text" id="email" name="email" placeholder="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-align-justify"></i>
                                                    </div>
                                                    <input type="text" id="status" name="status" placeholder="situação da matricula" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" id="acesso" class="btn btn-secondary">A espera de um QrCode</button>
                                            </div>
                                        </form>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="top-campaign">
                            <hr>
                                <h3 class="title-3 m-b-30">Ultimo horario</h3>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <tbody>
                                        <th>Dia</th>
                                        <th><th>
                                        <th>Horario</th>
                                            <tr>
                                                <td id="diaAnterior"></td>
                                                <td><td>
                                                <td id="dataAnterior"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <h3 class="title-3 m-b-30">Horario da entrada</h3>
                                    <table class="table table-top-campaign">
                                        <tbody>
                                            <th>Dia</th>
                                            <th></th>
                                            <th>Horario</th>
                                            <tr>
                                                <td id="diaEntrada"></td>
                                                <td></td>
                                                <td id="dataEntrada"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <video id="preview"></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop