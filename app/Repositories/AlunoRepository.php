<?php


namespace App\Repositories;


use App\AlunoModel;
use Illuminate\Http\Request;
use Prettus\Repository\Eloquent\BaseRepository;

class AlunoRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function model()
    {
        return AlunoModel::class;
    }
    /**
     * @param Request $request
     */
    public function salvarDados(Request $request)
    {
        return $this->salvar(
            new AlunoModel(),
            $request
        );
    }

    public function salvar($alunoModel, Request $request)
    {
        $dadosAluno = $request->all();
        $alunoModel->alun_nome = $dadosAluno['alun_nome'];
        $alunoModel->alun_rg = $dadosAluno['alun_rg'];
        $alunoModel->alun_cpf = $dadosAluno['alun_cpf'];
        $alunoModel->alun_nascimento = $dadosAluno['alun_nascimento'];
        $alunoModel->alun_email = $dadosAluno['alun_email'];
        $alunoModel->alun_fone = $dadosAluno['alun_fone'];
        $alunoModel->save();
    }


}
