<?php

namespace egresso\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class AlunosController extends Controller {

    public function listarAlunos() {

        $alunos = DB::select('SELECT * FROM alunos');

        return view('alunos.listagemDeAlunos')->with('alunos', $alunos);

    }

    public function frequenciaDoAluno($id) {

        $frequencia = DB::select('SELECT A.id, A.RA, nome, email, curso, status, MONTH(data_entrada) AS MES, DAY(data_entrada) AS DIA, TIME(data_entrada) AS HORARIO FROM alunos AS A
                        INNER JOIN cursos AS C ON A.cursos_id = C.id INNER JOIN anos AS AN ON A.anos_id = AN.id INNER JOIN semestres AS S ON A.semestres_id = S.id
                            INNER JOIN cidades AS CI ON A.cidades_id = CI.id INNER JOIN matricula AS M ON A.matricula_id = M.id RIGHT JOIN frequencia as F ON A.RA = F.RA
                                WHERE A.id = ?', [$id], ' AND MONTH(data_entrada) = ?', [12] , ' ORDER BY MONTH(data_entrada) DESC, DAY(data_entrada) DESC, TIME(data_entrada) DESC');

        if(empty($frequencia)) {
            return 'ERROR';
        }
        return view('alunos.frequenciaDoAluno')->with('frequencias', $frequencia[0]);
    }
}



?>