@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Detalles del usuario</h1>
    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Nombre:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Admin:</strong> {{ $user->is_admin ? 'Sí' : 'No' }}</p>
    <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Volver</a>
    <br>
    <br>

    <h2>Consultas</h2>
    @if ($user->consultas->isEmpty())
      <p>No hay consultas para este usuario.</p>
    @else
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Motivo</th>
            <th>Especialidad seleccionada</th>
            <th>Medico asignado</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($user->consultas as $consulta)
            <tr>
              <td>{{ $consulta->id }}</td>
              <td>{{ $consulta->motivo }}</td>
              <td>{{ $consulta->especialidad->nombre  }}</td>
              <td>{{ $consulta->medico->nombre . ' '. $consulta->medico->apellido }}</td>
              <td>{{ $consulta->horario->day . ' '. $consulta->horario->start_time  }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
@endsection
