<?php

namespace egresso\Http\Controllers;

use Request;
use egresso\Repository\Frequencia;
use egresso\Http\Controllers\QRCodeController as QRCode;

class FrequenciaController extends Controller
{
    private $frequencia;
    private $qrcode;

    public function __construct(Frequencia $frequencia, QRCode $qrcode)
    {
        $this->frequencia = $frequencia;
        $this->qrcode = $qrcode;
    }

    public function frequenciaDoAluno($id, $RA)
    {
        $frequenciaGeral = $this->frequencia->listarfrequenciaGeralDoAluno($id);
        $mesesDeFrequencia = $this->frequencia->listarMesesDeFrequenciaDoAluno($RA);
        $frequenciaDiariaDoMes = $this->frequencia->frequenciaDiariaDoMes($id);
        $mesDiaDeFrequencia = $this->frequencia->listarMesEDiaDeFrequencia($RA);
        $dadosDoAluno = $this->frequencia->listarDadosDoAlunoPorID($id);
        $qrcode = $this->qrcode->exibirQRCodePorID($id);

        $dados = [
            'frequenciaGeral' => $frequenciaGeral,
            'mesesDeFrequencia' => $mesesDeFrequencia,
            'frequenciaDiariaDoMes' => $frequenciaDiariaDoMes,
            'mesDiaDeFrequencia' => $mesDiaDeFrequencia,
            'dadosDoAluno' => $dadosDoAluno,
            'qrcode' => $qrcode
        ];

        return view('alunos.frequenciaDoAluno')->with('dados', $dados);
    }

}
