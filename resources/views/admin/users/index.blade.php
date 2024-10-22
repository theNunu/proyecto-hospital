@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Gestión a los usuarios</h1>
    <form action="{{ route('admin.users.index') }}" method="GET" class="d-flex">
      <input type="text" name="search" class="form-control me-2"
        placeholder="Buscar usuarios" value="{{ request('search') }}">
      <button class="btn btn-primary" type="submit">Buscar</button>
    </form>
    <br>
    <br>
    @if ($users->isEmpty())
      <p>No existe el usuario de nombre
        "{{ request('search') }}".</p>
    @else
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                <a class="btn btn-primary mb-0 me-2 p-1 px-1"
                  href={{ route('admin.users.show', $user) }}z
                  data-bs-toggle="tooltip" data-bs-placement="top" title="ver">
                  <x-icon icon="eye" />
              </td>

              <td> <!-- boton de editarr-->
                {{-- <a href="{{ route('admin.users.edit', $user) }}"
                  class="btn btn-primary">Editar</a> --}}
                <a class="btn btn-secondary mb-0 me-2 p-1 px-1"
                  href={{ route('admin.users.edit', $user) }}
                  data-bs-toggle="tooltip" data-bs-placement="top" title="editar">
                  <x-icon icon="pencil" />
                </a>

              </td>

              <td>
                {{-- <form action="{{ route('admin.users.destroy', $user) }}"
                  method="POST" style="display:inline-block;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"
                    onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
                </form> --}}
                <form action="{{ route('admin.users.destroy', $user) }}"
                  method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                    class="btn btn-danger mb-0 p-1 px-2 data-bs-toggle="tooltip"
                    data-bs-placement="top" title="eliminar"
                    onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                    <x-icon icon="trash" />
                  </button>
                </form> <!-- FIN DE boton editar r-->
            </tr>
          @endforeach
        </tbody>
      </table>

      {{ $users->links() }}
    @endif
  </div>
@endsection
