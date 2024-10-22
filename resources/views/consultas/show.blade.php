@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mas informaccion de la Consulta</div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="motivo" class="col-md-4 col-form-label text-md-end">Motivo:</label>
                        <div class="col-md-8">
                            <p class="form-control-plaintext">{{ $consulta->motivo }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="especialidad" class="col-md-4 col-form-label text-md-end">Especialidad:</label>
                        <div class="col-md-8">
                            <p class="form-control-plaintext">{{ $consulta->especialidad->nombre }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="medico" class="col-md-4 col-form-label text-md-end">Médico:</label>
                        <div class="col-md-8">
                            <p class="form-control-plaintext">{{ $consulta->medico->nombre }} {{ $consulta->medico->apellido }}</p>
                        </div> 
                    </div>

                    <div class="row mb-3">
                        <label for="medico" class="col-md-4 col-form-label text-md-end">Dia:</label>
                        <div class="col-md-8">
                            <p class="form-control-plaintext">{{ $consulta->horario->day }}</p>
                        </div> 
                    </div>

                    <div class="row mb-3">
                        <label for="horario" class="col-md-4 col-form-label text-md-end">Hora de la consulta:</label>
                        <div class="col-md-8">
                            <p class="form-control-plaintext">{{ $consulta->horario->start_time }}</p>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <a href="{{ route('consultas.index') }}" class="btn btn-primary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

