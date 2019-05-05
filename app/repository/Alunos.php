<?php

namespace egresso\repository;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    public $timestamps = false;
    protected $fillable =
        array('RA', 'nome', 'CPF', 'email', 'telefone', 'foto', 'cursos_id', 'anos_id', 'semestres_id', 'cidades_id', 'matricula_id');

    public function listarAlunos()
    {
        return Alunos::select('*', 'alunos.id')
            ->join('cursos', 'cursos_id', '=', 'cursos.id')
            ->join('anos', 'anos_id', '=', 'anos.id')
            ->join('semestres', 'semestres_id', '=', 'semestres.id')
            ->join('cidades', 'cidades_id', '=', 'cidades.id')
            ->join('matricula', 'matricula_id', '=', 'matricula.id')
            ->get();
    }
}
