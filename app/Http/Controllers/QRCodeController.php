<?php
namespace egresso\Http\Controllers;

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use egresso\Repository\Alunos;
use egresso\Repository\Frequencia;

class QRCodeController extends Controller
{
    private $dadosDoAluno;
    private $dadosDoAlunoPorID;

    public function __construct(Alunos $dadosDoAluno, Frequencia $dadosDoAlunoPorID)
    {
        $this->dadosDoAluno = $dadosDoAluno;
        $this->dadosDoAlunoPorID = $dadosDoAlunoPorID;
    }

    public function exibirQRCode()
    {
        $dados = $this->dadosDoAluno->listarAlunos();
        foreach ($dados as $dado) {
            $dados = "{$dado['nome']},{$dado['RA']},{$dado['curso']},{$dado['cpf']},{$dado['email']},{$dado['id']}";
            $options = new QROptions([
                'version' => 5,
                'eccLevel' => QRCode::ECC_L,
            ]);

            $qrcodeDados = (new QRCode($options))->render($dados);
            $qrcode[] = ['foto' => $qrcodeDados];
            $dadosDoAluno[] = $dado;

            $dados = [
                'qrcode' => $qrcode,
                'qrcodeDados' => $qrcodeDados,
                'dadosDoAluno' => $dadosDoAluno,
            ];
        }

        return view('alunos.qrCodeDosAlunos')->with('dados', $dados);
    }

    public function exibirQRCodePorID($id)
    {
        $dados = $this->dadosDoAlunoPorID->listarDadosDoAlunoPorID($id);
        $dadosQRCode = "{$dados['nome']},{$dados['RA']},{$dados['curso']},{$dados['cpf']},{$dados['email']},{$dados['id']}";
            $options = new QROptions([
                'version' => 5,
                'eccLevel' => QRCode::ECC_L,
            ]);

        return (new QRCode($options))->render($dadosQRCode);
    }

}
