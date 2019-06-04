<?php

namespace egresso\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use egresso\Repository\Alunos;

class AlunosController extends Controller
{
    private $alunos;

    public function __construct(Alunos $alunos)
    {
        $this->alunos = $alunos;
    }

    public function listarTodosOsAlunos()
    {
        $alunos = $this->alunos->listarAlunos();
        return view('alunos.listagemDeAlunos')->with('alunos', $alunos);
    }

    public function cadastrarAluno(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('foto') && $data['foto']->isValid()) {
            // $data['foto'] = $this->converterImagemEmBase64($request->file('foto'));
            $data['foto'] = $request->foto->getClientOriginalName();
        }

        Alunos::create($data);
        return redirect()->action('AlunosController@listarTodosOsAlunos')->withInput($request->only('nome'));
    }

    public function removerAluno($id)
    {
        $aluno = Alunos::find($id);
        $aluno->delete();
        return redirect()->action('AlunosController@listarTodosOsAlunos');
    }

    public function converterImagemEmBase64($imagem)
    {
        return \base64_encode(file_get_contents($imagem));
    }
}
