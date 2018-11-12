<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nm_medico',45);
            $table->integer('cpf_medico');
            $table->integer('rg_medico');
            $table->integer('nr_crm');
            $table->char('nm_usuario');
            $table->char('senha');
            $table->integer('num_acesso');
            $table->integer('laudo_idlaudo');
            $table->integer('cd_especialidade');
            $table->date('dt_registro');
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
        Schema::dropIfExists('medicos');
    }
}
