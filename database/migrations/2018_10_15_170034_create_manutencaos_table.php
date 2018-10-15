<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManutencaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manutencaos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('prox_limpeza');
            $table->date('prox_vacina');
            $table->date('prox_alimentacao');
            $table->unsignedInteger('id_animal');
            $table->foreign('id_animal')
                ->references('id')
                ->on('animals');
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
        Schema::dropIfExists('manutencaos');
    }
}
