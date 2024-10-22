@extends('layouts.app')

@section('content')
  <div class="container">
    @forelse ($consultas as $consulta)
      <div
        class="d-flex justify-content-between bg-na mb-3 rounded px-4 py-2 border border-dark">
        <div>
          <a href="{{ route('consultas.show', $consulta->id) }}">
            <img src="/img/mihospital.png" style="width: 20px;">
          </a>
        </div>

        <div class="d-flex align-items-center">
          <p class="me-2 mb-0">{{ $consulta->motivo }}</p>

          <!--  BOTON DE EDITAR -->
          <a class="btn btn-secondary mb-0 me-2 p-1 px-2"
            href={{ route('consultas.edit', $consulta->id) }}>
            <x-icon icon="pencil" />
          </a>

          <!--  BOTON DE ELIMINAR --> <!--  DEJALO ASI-->
          <form action="{{ route('consultas.destroy', $consulta->id) }}"
            method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"
              class="btn btn-danger mb-0 p-1 px-2 data-bs-toggle="tooltip"
              data-bs-placement="top" title="eliminar"
              onclick="return confirm('¿Estás seguro de que deseas cancelar esta consulta?');">
              <x-icon icon="trash" />
            </button>
          </form>

        </div>
      </div>
    @empty
      <div class="col-md-4 mx-auto">
        <div class="card card-body text-center">
          <p>No hay consultas todavía</p>
          <a href="{{ route('consultas.create') }}">Añadir una</a>
        </div>
      </div>
    @endforelse
    {{ $consultas->links() }}
  </div>
@endsection
