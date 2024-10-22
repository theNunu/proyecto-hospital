@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Editar Usuario</h1>
    <form action="{{ route('admin.users.update', $user) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Cambiar Contraseña (dejar en blanco para mantener la actual)</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
      </div>
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
  </div>
@endsection
