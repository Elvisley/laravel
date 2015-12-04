<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nome" , 255);
            $table->string("rg" , 15);
            $table->string("cpf" , 15);
            $table->string("email" , 160);
            $table->string("telefone_principal" , 15);
            $table->string("telefone_celular" , 15);
            $table->string("telefone_recado" , 15);
            $table->integer("estado_civil" );
            $table->string("endereco" , 255);
            $table->integer("numero");
            $table->string("complemento" , 512);
            $table->string("bairro" , 150);
            $table->string("cidade" , 150);
            $table->integer("cep");
            $table->string("foto" , 120);
            $table->mediumText("observacao");
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
        Schema::drop('pessoas');
    }
}
