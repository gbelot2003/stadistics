<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposujetoagredidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiposujetoagredidos', function (Blueprint $table) {
            $table->increments('id')->index()->unsigned();
            $table->string('tiposujetoagredido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tiposujetoagredidos');
    }
}
