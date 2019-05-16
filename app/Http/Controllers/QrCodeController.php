<?php
namespace egresso\Http\Controllers;

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use egresso\Repository\Alunos;

class QrCodeController extends Controller
{
    private $dadosDoAluno;

    public function __construct(Alunos $dadosDoAluno)
    {
        $this->dadosDoAluno = $dadosDoAluno;
    }

    public function exibirQrCode()
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

            $dados = [
                'qrcode' => $qrcode,
                'qrcodeDados' => $qrcodeDados,
            ];
        }

        return view('alunos.qrCodeDosAlunos')->with('dados', $dados);
    }

}
