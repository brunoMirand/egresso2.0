<?php

namespace egresso\Repository;

use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    protected $table = 'cidades';
    public $timestamps = false;
    protected $fillable = array('cidade');

    public function listarTodasAsCidades()
    {
        return Cidades::all();
    }
}
