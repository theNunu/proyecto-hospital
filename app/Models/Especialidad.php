<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;
    protected $table = 'especialidades';
    protected $fillable = [
        'nombre',
        'descripcion',
        //'horario_id' ///TAL VEZ SE QUITE
    ];

    //añadido para que se muestre en show.blade.php
    public function medico()
    {
        return $this->hasOne(Medico::class); //cada especialidad tiene un medico asociado
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }
}
