<?php

namespace App\Http\Controllers;
use App\Models\Consulta;
use App\Models\Especialidad;
use App\Models\Medico;
use App\Models\Horario;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConsultaRequest; //IMPORTAAAARR
use Illuminate\Support\Facades\Auth; //IMPORTAAAARR

class ConsultaController extends Controller
{
    public function __construct() //para limitar al admin y usuario
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check() && Auth::user()->is_admin) {
                return redirect('/admin/users')->with('error', 'Los administradores no pueden acceder a las funciones de consultas.');
            }
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $consultas = auth()->user()->consultas()->paginate(5); //usuario aprarezca solo lo creado suyo /recomiendo DEJAR ESTA LINEA FUNCIONAR
        return view('consultas.index', compact('consultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Obtener todas las especialidades
        $especialidades = Especialidad::all();
        $medicos = Medico::all();

        // Pasar las especialidades a la vista
        return view('consultas.create', compact('medicos', 'especialidades'));
    }


    public function getHorarios(Request $request)
    {
        $horarios = Horario::where('especialidad_id', $request->especialidad_id)->take(3)->get();
        return response()->json($horarios);
    }

    public function getMedicos(Request $request)
    {
        $medicos = Medico::whereHas('horarios', function ($query) use ($request) {
            $query->where('id', $request->horario_id);
        })->get();
        return response()->json($medicos);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConsultaRequest $request) //añadimos codigo , store: donde se guarda
    {
        //Consulta::create($data, [...$data, 'user_id' => auth()->id()]); // Asignar el ID del usuario autenticado

        $consulta = auth()->user()->consultas()->create($request->validated()); //NO MOVER ESTA LINEA

        return redirect('home')->with('alert', [
            'message' => "tu consulta por motivos de $consulta->motivo se creo excitosamente",
            'type' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consulta  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Consulta $consulta)
    {
        $this->authorize('view', $consulta);
        // Cargar las relaciones necesarias
        $consulta->load('especialidad', 'horario', 'medico');

        return view('consultas.show', compact('consulta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function edit(Consulta $consulta)
    {
        $this->authorize('update', $consulta);

        $especialidades = Especialidad::all(); // Cargar todas las especialidades
        $horarios = Horario::where('especialidad_id', $consulta->especialidad_id)->get();
        $medicos = Medico::whereHas('horarios', function ($query) use ($consulta) {
            $query->where('id', $consulta->horario_id);
        })->get();

        return view('consultas.edit', compact('consulta', 'especialidades', 'horarios', 'medicos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consulta  $consulta //aqui decia Contact
     * @return \Illuminate\Http\Response
     */
    public function update(StoreConsultaRequest $request, Consulta $consulta)  //actualizar
    {
        $this->authorize('update', $consulta);
        //$data['user_id'] = auth()->id(); // Asignar el ID del usuario autenticado
        $consulta->update($request->validated());

        return redirect('home')->with('alert', [
            'message' => "tu consulta por motivos de $consulta->motivo se ha actualizado correctamente",
            'type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consulta $consulta)
    {
        $this->authorize('delete', $consulta);

        $consulta->delete();

        return redirect('home')->with('alert', [
            'message' => "tu consulta por motivos de $consulta->motivo se ha cancelado correctamente",
            'type' => 'danger',
        ]);
    }
}
