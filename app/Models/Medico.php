<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $table = 'medicos';
    protected $fillable = [
        'nombre',
        'descripcion',
        'apellido',
        'n-cedula',
        'email',
        'edad',
        'url_image',
        'description'
    ];
    // Relación con Especialidad
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }
}
