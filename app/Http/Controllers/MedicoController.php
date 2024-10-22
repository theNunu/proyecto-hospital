<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;



class MedicoController extends Controller
{
    //
    public function showSpecificMedicos()
    {
        // Obtener los médicos por sus IDs específicos en una sola consulta
        $medicoIds = range(1, 12); // Rango de IDs de 1 a 12
        $medicos = Medico::findMany($medicoIds);

        // Pasar los médicos a la vista
        return view('home', ['medicos' => $medicos]);
    }

    public function index()
    {
        // Obtener todos los médicos
        $medicos = Medico::all();

        // Pasar la lista de médicos a la vista
        return view('home', ['medicos' => $medicos]);
    }

}
