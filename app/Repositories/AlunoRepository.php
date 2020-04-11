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
        $dados = $request->all();
        dd($dados);
    }


}
