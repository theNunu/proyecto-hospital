<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Especialidad;  //IMPORADO PA QUE NO SE QUEJE
use App\Models\User;  //IMPORADO PA QUE NO SE QUEJE
use App\Models\Horario;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->string('motivo');
            $table->foreignIdFor(Especialidad::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Horario::class);
            $table->foreignId('medico_id')->constrained('medicos');
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
        Schema::dropIfExists('consultas');
    }
};
