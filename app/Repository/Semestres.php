<?php

namespace egresso\Repository;

use Illuminate\Database\Eloquent\Model;

class Semestres extends Model
{
    protected $table = 'semestres';
    public $timestamps = false;
    protected $fillable = array('semestre');

    public function listarTodosOsSemestres()
    {
        return Semestres::all();
    }
}
