<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * '
     */
    public function up()
    {
        Schema::create('especialidades', function (Blueprint $table) {
            $table->increments('idespecialidades');
            $table->char('ds_especialidades',45);
            $table->dateTime('dt_registro');
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
        Schema::dropIfExists('especialidades');
    }
}
