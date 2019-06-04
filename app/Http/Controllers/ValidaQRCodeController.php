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
        $timeZone = new \DateTimeZone('America/Sao_Paulo');
        $data = new \DateTime('now', $timeZone);
        $diaEntrada = $data->format('d');
        $mesEntrada = $data->format('m');
        $anoEntrada = $data->format('Y');
        $horarioEntrada = $data->format('H:i:s');

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
        }
    }
}
