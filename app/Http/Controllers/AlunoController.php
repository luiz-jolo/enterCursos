<?php

namespace App\Http\Controllers;

use App\AlunoModel;
use App\Http\Requests\AlunoRequest;
use App\Repositories\AlunoRepository;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    private $alunoRepository;

    public function __construct(AlunoRepository $alunoRepository)
    {
        $this->alunoRepository = $alunoRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('aluno.index')
            ->with('alunos', AlunoModel::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * @param AlunoRequest $alunoRequest
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(AlunoRequest $alunoRequest)
    {
        try {
            $this->alunoRepository->salvarDados($alunoRequest);
            return redirect('/aluno')->with('success','Cadastro Realizado com sucesso');

        } catch (\Exception $e){
            echo 'erro na execucao store controller aluno', $e->getMessage(), "\n";
        }
    }

    /**
     * @param $resource
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($resource)
    {
        try {
            switch ($resource){
                case 'cadastro':
                    return view('aluno/cadastro');
                    break;
            }
        }catch (\Exception $e){
            echo 'erro na execucao do show do aluno controller', $e->getMessage(), "\n";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = AlunoModel::where('alun_id', $id)->first();
        return view('aluno/editar', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlunoRequest $alunoRequest, $id)
    {
        try{
            $this->alunoRepository->atualizarDados($alunoRequest, $id);
            return redirect('/aluno')->with('success','Atualização realizada com sucesso!');
        }catch (\Exception $e){
            echo 'erro na execucao do update do aluno controller', $e->getMessage(), "\n";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $this->alunoRepository->deletar($id);
            return redirect('/aluno')->with('success', 'Aluno excluido!');
        }catch (\Exception $e){
            echo 'erro na execucao do destroy do aluno controller', $e->getMessage(), "\n";
        }
    }
}
