<?php

namespace egresso\Http\Controllers;

use Request;
use egresso\Alunos;

class AlunosController extends Controller
{

    public function listarAlunos()
    {
        $alunos = Alunos::all();
        return view('alunos.listagemDeAlunos')->with('alunos', $alunos);
    }

    public function formularioDeCadastro()
    {
        return view('alunos.formularioDeCadastro');
    }

    public function cadastrarAluno(Request $request)
    {

        $data = $request::all();
        $data['foto'];
        if ($request::hasFile('foto') && $request::file('foto')->isValid()) {
            $data['foto'] = $this->converterImagemEmBase64($request::file('foto'));
        }

        Alunos::create($data);
        return redirect()->action('AlunosController@listarAlunos')->withInput(Request::only('nome'));
    }

    public function removerAluno($id)
    {
        $aluno = Alunos::find($id);
        $aluno->delete();
        return redirect()->action('AlunosController@listarAlunos');
    }

    public function converterImagemEmBase64($imagem)
    {
        return \base64_encode(file_get_contents($imagem));
    }

}

?>