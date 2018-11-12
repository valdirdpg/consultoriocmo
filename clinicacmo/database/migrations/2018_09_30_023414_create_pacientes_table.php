<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nm_paciente') 		;
            $table->date('dt_Nascimento') 	;
            $table->char('sexo') 			;
            $table->char('cpf') 				;
            $table->char('rg') 				;
            $table->char('profissao') 		;
            $table->char('nm_pai') 			;
            $table->char('nm_mae') 			;
            $table->char('nr_carteira')		;
            $table->char('end_rua') 			;
            $table->char('end_bairro') 		;
            $table->char('end_cidade') 		;
            $table->integer('end_cep') 		;
            $table->char('end_uf') 			;
            $table->char('nr_telefone')		;
            $table->char('nr_celular') 		;
            $table->char('ct_email') 		;
            $table->char('senha') 			;
            $table->char('usuario') 			;
            $table->integer('cd_convenio') 	;
            $table->integer('cd_laudo') 		;
            $table->integer('idade') 			;
            $table->integer('cd_prontuario') ;
            $table->datetime('dt_registro') 	;
            $table->timestamps();
            $table->boolean('ativo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
