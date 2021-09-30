<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvolucoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evolucoes', function (Blueprint $table) {
            $table->id();

            $table->integer('idEvolucao');
            $table->string('imagem_avatar', 100);
            $table->string('dataHoraEvolucao', 100);
            $table->string('avatar', 100);

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
        Schema::dropIfExists('evolucoes');
    }
}
