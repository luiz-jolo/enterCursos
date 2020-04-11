<?php

namespace App\Entities;

use App\AlunoModel;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class AlunoRepository.
 *
 * @package namespace App\Entities;
 */
class AlunoRepository extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function model()
    {
        return AlunoModel::class;
    }

}
