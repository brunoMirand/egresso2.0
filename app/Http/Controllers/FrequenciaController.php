<?php

namespace egresso\Http\Controllers;

use Request;
use egresso\Frequencia;

class FrequenciaController extends Controller
{
    public function frequenciaDoAluno($id)
    {
        $frequencia = Frequencia::frequenciaDiaria($id);
        return view('alunos.frequencias.frequenciaDoAluno')->with('frequencias', $frequencia);
    }

}
