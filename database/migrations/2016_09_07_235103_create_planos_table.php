<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('curso',80);
            $table->string('titulo',80);
            $table->text('conteudo');
            $table->text('objetivo');
            $table->text('metodologia');
            $table->text('avaliacao');
            $table->text('referencia');
            $table->text('descricao',255);
            $table->dateTime('data_insert');
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
        Schema::dropIfExists('planos');
    }
}
