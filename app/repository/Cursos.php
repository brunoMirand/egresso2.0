<?php

namespace egresso\repository;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $table = 'cursos';
    public $timestamps = false;
    protected $fillable = array('curso');

    public function listarTodosOsCursos()
    {
        return Cursos::all();
    }
}
