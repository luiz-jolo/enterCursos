<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        'alun_fone',
        'alun_rg',
        'alun_observacao'
    ];

    use SoftDeletes;

}
