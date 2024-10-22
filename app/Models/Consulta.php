<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'motivo',
        'especialidad_id',
        'horario_id',
        'medico_id',
        'user_id', //decirle que el campo se puede rellenar
    ];

    public function user() { // eso para autenticar el usuario
        return $this -> belongsTo(User::class);
    }

    public function especialidad() //esto lo añadi puede que lo quite
    {
        return $this->belongsTo(Especialidad::class, 'especialidad_id');
    }

    public function horario()
    {
        return $this->belongsTo(Horario::class);
    }

    // Definir la relación con Medico
    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }
    // he quitado(espero que haya problemas)
    //return $this->belongsTo(Especialidad::class, 'especialidad_id');
}
