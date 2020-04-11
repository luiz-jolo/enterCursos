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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
