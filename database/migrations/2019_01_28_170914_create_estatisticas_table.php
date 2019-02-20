<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatisticas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('n_amaraelos');
            $table->integer('n_vermelhos');
            $table->integer('n_assistencias');
            $table->integer('n_gols');

            $table->unsignedInteger('jogador_id');
            $table->unsignedInteger('jogo_id');

            $table->foreign('jogador_id')->references('id')->on('jogadors');
            $table->foreign('jogo_id')->references('id')->on('jogos');

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
        Schema::dropIfExists('estatisticas');
    }
}
