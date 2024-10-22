<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Especialidad;  //IMPORADO PA QUE NO SE QUEJE
use App\Models\Horario;  //IMPORADO PA QUE NO SE QUEJE

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('n_cedula');
            $table->string('email');
            $table->tinyInteger('edad', unsigned: true);
            $table->timestamps();
            
            //cards atributes
            $table->string('url_image');
            $table->string('description');

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
};
