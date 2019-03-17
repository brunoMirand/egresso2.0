<?php

namespace egresso;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    public $timestamps = false;
    protected $fillable =
        array('RA', 'nome', 'CPF', 'email', 'telefone', 'foto', 'cursos_id', 'anos_id', 'semestres_id', 'cidades_id', 'matricula_id');
}
