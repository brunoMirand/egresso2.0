<?php

namespace egresso\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use egresso\repository\Alunos;

class AlunosController extends Controller
{

    public function listarAlunos()
    {
        $alunos = Alunos::all();
        return view('alunos.listagemDeAlunos')->with('alunos', $alunos);
    }

    public function cadastrarAluno(Request $request)
    {
        $data = $request->all();
        if (empty($data['foto'])) {
            return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }

        if ($request->hasFile('foto') && $data['foto']->isValid()) {
            $data['foto'] = $this->converterImagemEmBase64($request->file('foto'));
        }

        Alunos::create($data);
        return redirect()->action('AlunosController@listarAlunos')->withInput($request->only('nome'));
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
