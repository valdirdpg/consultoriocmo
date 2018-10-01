<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('idfuncionario');
            $table->char('nome') 		;
            $table->date('dt_Nascimento') 	;
            $table->char('sexo') 			;
            $table->char('cpf') 				;
            $table->char('rg') 				;
            $table->char('função') 		;
            $table->char('ctps')		;
            $table->char('end_rua') 			;
            $table->char('end_bairro') 		;
            $table->char('end_cidade') 		;
            $table->integer('end_cep') 		;
            $table->char('end_uf') 			;
            $table->char('nr_telefone')		;
            $table->char('nr_celular') 		;
            $table->char('ct_email') 		;
            $table->date('admissao');
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
        Schema::dropIfExists('funcionarios');
    }
}
