<?php

namespace egresso\Http\Controllers;

use egresso\Repository\Cursos;
use egresso\Repository\Anos;
use egresso\Repository\Semestres;
use egresso\Repository\Cidades;
use egresso\Repository\StatusDaMatricula as Status;

class FormularioDeCadastroController extends Controller
{
    private $cursos;
    private $anos;
    private $semestres;
    private $cidades;
    private $status;

    public function __construct(Cursos $cursos, Anos $anos, Semestres $semestres, Cidades $cidades, Status $status)
    {
        $this->cursos = $cursos;
        $this->anos = $anos;
        $this->semestres = $semestres;
        $this->cidades = $cidades;
        $this->status = $status;
    }

    public function formularioDeCadastro()
    {
        $cursos = $this->cursos->listarTodosOsCursos();
        $anos = $this->anos->listarTodosOsAnos();
        $semestres = $this->semestres->listarTodosOsSemestres();
        $cidades = $this->cidades->listarTodasAsCidades();
        $status = $this->status->listarTodosOsStatus();

        $dados = [
            'cursos' => $cursos,
            'anos' => $anos,
            'semestres' => $semestres,
            'cidades' => $cidades,
            'status' => $status,
        ];

        return view('alunos.formularioDeCadastro')->with('dados', $dados);
    }
}

