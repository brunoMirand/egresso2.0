<?php

namespace egresso\repository;

use Illuminate\Database\Eloquent\Model;

class StatusDaMatricula extends Model
{
    protected $table = 'matricula';
    public $timestamps = false;
    protected $fillable = array('status');

    public function listarTodosOsStatus()
    {
        return StatusDaMatricula::all();
    }
}
