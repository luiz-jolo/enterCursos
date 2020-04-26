<?php


namespace App\Repositories;


use App\AlunoModel;
use App\Http\Requests\AlunoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
    public function salvarDados(AlunoRequest $alunoRequest)
    {
        return $this->salvar(
            new AlunoModel(),
            $alunoRequest
        );
    }

    public function salvar($alunoModel, AlunoRequest $alunoRequest)
    {
        $dadosAluno = $alunoRequest->all();
        $alunoModel->alun_nome = $dadosAluno['alun_nome'];
        $alunoModel->alun_rg = $dadosAluno['alun_rg'];
        $alunoModel->alun_cpf = $dadosAluno['alun_cpf'];
        $alunoModel->alun_nascimento = $dadosAluno['alun_nascimento'];
        $alunoModel->alun_email = $dadosAluno['alun_email'];
        $alunoModel->alun_fone = $dadosAluno['alun_fone'];
        $alunoModel->save();

        return $alunoModel;

    }


}
