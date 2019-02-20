<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->increments('id');

            $table->date('data');
            $table->time('hora');
            $table->integer('gols_mandante');
            $table->integer('gols_visitante');

            $table->unsignedInteger('equipe1_id');
            $table->unsignedInteger('equipe2_id');

            $table->foreign('equipe1_id')->references('id')->on('equipes');
            $table->foreign('equipe2_id')->references('id')->on('equipes');

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
        Schema::dropIfExists('jogos');
    }
}
