<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('estados', function (Blueprint $table){
            $table->integer('id')->unsigned()->primary(); //Padrão IBGE
            $table->string('nome');
            $table->string('sigla',2);
            $table->integer('regiao_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('estados');
    }
}
