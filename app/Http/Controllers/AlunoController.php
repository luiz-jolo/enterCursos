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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(AlunoRequest $alunoRequest)
    {
        try {
            $resposta = $this->alunoRepository->salvarDados($alunoRequest);
//            return response()->json($resposta);
            return redirect('/aluno')->with('toast_success','Cadasto Correto');

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
