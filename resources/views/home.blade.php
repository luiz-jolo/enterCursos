@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Alunos
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('aluno.index') }}"><button class="btn btn-outline-info">Alunos</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Cursos
                                </div>
                                <div class="card-body">
                                    <a href="#"><button class="btn btn-outline-secondary">Cursos</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Financeiro
                                </div>
                                <div class="card-body">
                                    <a href="#"><button class="btn btn-outline-success">Financeiro  </button></a>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
