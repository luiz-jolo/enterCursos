@extends('layouts.app')

@section('content')

    @if(session('success_message'))
        <div class="alert alert-success">
            {{ session('success_message') }}
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
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
                                           <th>Ação</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($alunos as $aluno)
                                       <tr>
                                            <td>{{ $aluno->alun_id }}</td>
                                            <td>{{ $aluno->alun_nome }}</td>
                                            <td>{{ $aluno->alun_email }}</td>
                                            <td>{{ $aluno->alun_cpf }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-warning" href="{{ route('aluno.edit', $aluno->alun_id) }}">Editar</a>
                                                <form action="{{ route('aluno.destroy', $aluno->alun_id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit" onclick="confirmDelete()" >Deletar</button>
                                                </form>
                                            </td>
                                       </tr>
                                       @endforeach
                                   </tbody>
                                </table>
                                {{ $alunos->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(){
            if(confirm("Deletar o aluno?")){
                return true
            }
            else{
                alert('ops')
                return false;
            }
        }
    </script>

@endsection
