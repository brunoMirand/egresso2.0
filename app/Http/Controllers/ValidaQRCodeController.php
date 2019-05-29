<?php

namespace egresso\Http\Controllers;

use egresso\Repository\Frequencia;
use Illuminate\Http\Request;

class ValidaQRCodeController extends Controller
{
    private $dadosDoAluno;

    public function __construct(Frequencia $dadosDoAluno)
    {
        $this->dadosDoAluno = $dadosDoAluno;
    }

    public function validaQRCode(Request $request)
    {
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        $diaEntrada = strftime('%d');
        $mesEntrada = strftime('%m-%b');
        $anoEntrada = strftime('%G');
        $horarioEntrada = strftime('%T');

        $request = $request->all();

        $id = $request['id'];

        $dados = $this->dadosDoAluno->listarDadosDoAlunoPorID($id);

        if (!empty($dados)) {
            $RA = $request['RA'];
            $status = $dados['status'];
            $ano = $dados['ano'];
            $mes = $dados['mes'];
            $dia = $dados['dia'];
            $horario = $dados['horario'];
            $imagem = $dados['foto'];
            $this->dadosDoAluno->inserirFrequencia($RA, $id);
                $response = [
                    'id' => $id,
                    'ra' => $RA,
                    'status' => $status,
                    'dataAnterior' => [
                        'ano' => $ano,
                        'mes' => $mes,
                        'dia' => $dia,
                        'horario' => $horario,
                    ],
                    'dataEntrada' => [
                        'ano' => $anoEntrada,
                        'mes' => $mesEntrada,
                        'dia' => $diaEntrada,
                        'horario' => $horarioEntrada,
                    ],
                    'imagem' => $imagem,
                ];
            echo json_encode($response);
            http_response_code(200);
            die;
        }
    }
}
