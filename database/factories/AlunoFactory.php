<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AlunoModel;
use Faker\Generator as Faker;

$factory->define(AlunoModel::class, function (Faker $faker) {
    return [
        'alun_nome' => $faker->name,
        'alun_email' => $faker->email ,
        'alun_nascimento' => $faker->date,
        'alun_cpf' => $faker->numberBetween(10000000000,99999999988),
        'alun_rg' => $faker->numberBetween(10000,50000),
        'alun_fone' => $faker->numberBetween(910001000,919999999)
    ];
});
