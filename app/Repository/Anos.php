<?php

namespace egresso\Repository;

use Illuminate\Database\Eloquent\Model;

class Anos extends Model
{
    protected $table = 'anos';
    public $timestamps = false;
    protected $fillable = array('ano');

    public function listarTodosOsAnos()
    {
        return Anos::all();
    }
}
