<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table) {
            $table->increments('alun_id');
            $table->string('alun_nome');
            $table->integer('alun_cpf');
            $table->string('alun_rg', 15);
            $table->date('alun_nascimento');
            $table->string('alun_email', 100);
            $table->integer('alun_fone');
            $table->softDeletes(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno');
    }
}
