<?php

use App\AlunoModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AlunoSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        pode criar direto aqui, um exemplo é pra add o usuário ADM no sistema.
//        $faker = Faker\Factory::create();
//        DB::table('aluno')->insert([
//            'alun_nome' => $faker->name,
//            'alun_email' => $faker->email ,
//            'alun_nascimento' => $faker->date,
//            'alun_cpf' => $faker->numberBetween(10000000000,99999999988),
//            'alun_rg' => $faker->numberBetween(10000,50000),
//            'alun_fone' => $faker->numberBetween(910001000,919999999)
//        ]);

        factory(AlunoModel::class, 20)->create();

    }
}
