@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('js/welcome.js') }}" defer></script>
@endpush

@section('content')
  <div class="welcome d-flex align-items-center justify-content-center">
    <div class="text-center">
      <h1 style="color: white;">Bienvenido a OvniMedical</h1>
      {{-- <a class="btn btn-lg btn-dark" href="register.php">registrate</a> --}}
    </div>
  </div>
@endsection
