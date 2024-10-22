@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="row justify-content-center w-100">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Editar consulta</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('consultas.update', $consulta->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="motivo" class="col-md-4 col-form-label text-md-end">Motivo</label>
                            <div class="col-md-8">
                                <input id="motivo" type="text" class="form-control @error('motivo') is-invalid @enderror" name="motivo" value="{{ old('motivo', $consulta->motivo) }}" required>
                                @error('motivo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="especialidad" class="col-md-4 col-form-label text-md-end">Especialidad</label>
                            <div class="col-md-8">
                                <select class="form-select" id="especialidad" name="especialidad_id" required>
                                    <option value="" selected>Selecciona una opción</option>
                                    @foreach ($especialidades as $especialidad)
                                        <option value="{{ $especialidad->id }}" {{ $consulta->especialidad_id == $especialidad->id ? 'selected' : '' }}>{{ $especialidad->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="horario" class="col-md-4 col-form-label text-md-end">Horario</label>
                            <div class="col-md-8">
                                <select class="form-select" id="horario" name="horario_id" required>
                                    <option value="" selected>Selecciona una especialidad primero</option>
                                    @foreach ($horarios as $horario)
                                        <option value="{{ $horario->id }}" {{ $consulta->horario_id == $horario->id ? 'selected' : '' }}>{{ $horario->day }} {{ $horario->start_time }} - {{ $horario->end_time }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="medico" class="col-md-4 col-form-label text-md-end">Medico</label>
                            <div class="col-md-8">
                                <select class="form-select" id="medico" name="medico_id" required>
                                    <option value="" selected>Selecciona un horario primero</option>
                                    @foreach ($medicos as $medico)
                                        <option value="{{ $medico->id }}" {{ $consulta->medico_id == $medico->id ? 'selected' : '' }}>{{ $medico->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('especialidad').addEventListener('change', function() {
    fetch('/consultas/horarios', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            especialidad_id: this.value
        })
    }).then(response => response.json())
      .then(data => {
          let horarioSelect = document.getElementById('horario');
          horarioSelect.innerHTML = '<option value="" selected>Selecciona una opción</option>';
          data.forEach(horario => {
              horarioSelect.innerHTML += `<option value="${horario.id}">${horario.day} ${horario.start_time} - ${horario.end_time}</option>`;
          });
      });
});

document.getElementById('horario').addEventListener('change', function() {
    fetch('/consultas/medicos', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            horario_id: this.value
        })
    }).then(response => response.json())
      .then(data => {
          let medicoSelect = document.getElementById('medico');
          medicoSelect.innerHTML = '<option value="" selected>Selecciona una opción</option>';
          data.forEach(medico => {
              medicoSelect.innerHTML += `<option value="${medico.id}">${medico.nombre}</option>`;
          });
      });
});
</script>
@endsection
