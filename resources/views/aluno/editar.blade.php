@extends('layouts.app')

@section('content')

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edição de aluno</div>

                    <div class="card-body">

                        <form method="post" action="{{ route('aluno.update', $registro->alun_id) }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nome">Nome</label>
                                    <input name="alun_nome" type="text" class="form-control" id="nome" value="{{ $registro->alun_nome ?? '' }}" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cpf">Data de Nascimento</label>
                                    <input name="alun_nascimento" type="date" class="form-control" id="date" value="{{ $registro->alun_nascimento ?? '' }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input name="alun_email" type="email" class="form-control" id="email" value="{{ $registro->alun_email ?? '' }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Numero de contato</label>
                                    <input name="alun_fone" type="text" class="form-control" id="fone" value="{{ $registro->alun_fone ?? '' }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nome">RG</label>
                                    <input name="alun_rg" type="text" class="form-control" id="rg" value="{{ $registro->alun_rg ?? '' }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cpf">CPF</label>
                                    <input name="alun_cpf" type="text" class="form-control" id="inputPassword4" value="{{ $registro->alun_cpf ?? '' }}">
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
