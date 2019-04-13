<?php

namespace egresso\Http\Controllers;

use Request;
use egresso\Frequencia;

class FrequenciaController extends Controller
{
    private $frequencia;

    public function __construct(Frequencia $frequencia)
    {
        $this->frequencia = $frequencia;
    }

    public function frequenciaDoAluno($id, $RA)
    {
        $frequenciaDiaria = $this->frequencia->frequenciaDiaria($id);
        $mesesDeFrequencia = $this->frequencia->listarMesesDeFrequenciaDoAluno($RA);

        $dados = [
            'frequenciaDiaria' => $frequenciaDiaria,
            'mesesDeFrequencia' => $mesesDeFrequencia
        ];

        return view('alunos.frequenciaDoAluno')->with('dados', $dados);
    }

}
