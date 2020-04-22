@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cadastro de aluno</div>

                    <div class="card-body">

                        <form method="post" action="{{ route('aluno.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nome">Nome</label>
                                    <input name="alun_nome" type="text" class="form-control" id="nome" placeholder="Nome Completo">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cpf">Data de Nascimento</label>
                                    <input name="alun_nascimento" type="date" class="form-control" id="date" placeholder="050901991">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input name="alun_email" type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Numero de contato</label>
                                    <input name="alun_fone" type="text" class="form-control" id="fone" placeholder="67 99622-5333">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nome">RG</label>
                                    <input name="alun_rg" type="text" class="form-control" id="rg" placeholder="1499999">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cpf">CPF</label>
                                    <input name="alun_cpf" type="text" class="form-control" id="inputPassword4" placeholder="00512245185">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                        <br>
                        <a href="{{ route('aluno.index') }}"><button class="btn btn-outline-primary">Retornar</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
