<?php

namespace egresso;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Frequencia extends Model
{
    protected $table = 'frequencia';
    public $timestamps = false;
    protected $fillable =
        array('RA', 'data_entrada', 'alunos_id');

    public static function frequenciaDiaria($id)
    {
        $frequencia = DB::table('frequencia')
            ->select('*', DB::raw("MONTH(data_entrada) as mes, DAY(data_entrada) as dia, TIME(data_entrada) as horario"))
            ->leftjoin('alunos', 'frequencia.RA', '=', 'alunos.RA')
            ->where('alunos.id', '=', $id)
            ->orderBy('mes', 'dia', 'horario', 'DESC')
            ->get();

        return $frequencia;
    }

    public static function frequenciaTotalDiasEMes($RA)
    {
        $frequencia = DB::table('frequencia')
            ->select(DB::raw("MONTH(data_entrada) as mes, DAY(data_entrada) as dia"))
            ->where('RA', '=', $RA)
            ->groupBy('data_entrada')
            ->orderBy('mes', 'dia', 'DESC')
            ->get();

        return $frequencia;
    }

}
