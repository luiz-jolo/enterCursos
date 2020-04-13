<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoModel extends Model
{
    protected $table = 'aluno';

    protected $primaryKey = 'alun_id';

    protected $fillable = [
        'alun_id',
        'alun_nome',
        'alun_email',
        'alun_nascimento',
        'alun_cpf',
        'alun_rg',
        'alun_observacao'
    ];

}
