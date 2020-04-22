@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard do Aluno</div>
                    <div class="card-body">
                        <a href="{{ route('aluno.show', 'cadastro') }}">
                            <button class="btn btn-outline-info">+ novo aluno</button>
                        </a>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table mt-3">
                                   <thead>
                                       <tr>
                                           <th>#</th>
                                           <th>Nome</th>
                                           <th>email</th>
                                           <th>CPF</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($alunos as $aluno)
                                       <tr>
                                            <td>{{ $aluno->alun_id }}</td>
                                            <td>{{ $aluno->alun_nome }}</td>
                                            <td>{{ $aluno->alun_email }}</td>
                                            <td>{{ $aluno->alun_cpf }}</td>
                                       </tr>
                                       @endforeach
                                   </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
