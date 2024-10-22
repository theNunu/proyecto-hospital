@extends('layouts.app')
<!-- ESTO NO VALEEEEEEEEEE-->
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Agenda una cita</div>

          <div class="card-body">
            <form method="POST" action="{{ route('contacts.store') }}">
              @csrf
              <div class="row mb-3">
                <label for="name"
                  class="col-md-4 col-form-label text-md-end">Nombre</label>

                <div class="col-md-6">
                  <input id="name" type="text"
                    class="@error('name') is-invalid @enderror form-control"
                    name="name" value= "{{ old('name') }}" autocomplete="name" > <!-- creacion del error-->

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      <!-- message es llamado name -->
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="phone_number"
                  class="col-md-4 col-form-label text-md-end">Numero de telefonor</label>

                <div class="col-md-6">
                  <input id="phone_number" type="tel"
                   class="@error('phone_number') is-invalid @enderror form-control"
                    name="phone_number" value= "{{ old('phone_number') }}" autocomplete="phone_number">

                  @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      <!-- message es llamado phone_number -->
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="email"
                  class="col-md-4 col-form-label text-md-end">Email</label>

                <div class="col-md-6">
                  <input id="email" type="text"
                    class="@error('email') is-invalid @enderror form-control"
                     name="email" value= "{{ old('email') }}" autocomplete="email">

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      <!-- message es llamado phone_number -->
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="age"
                  class="col-md-4 col-form-label text-md-end">Age</label>

                <div class="col-md-6">
                  <input id="age" type="text"
                    class="@error('age') is-invalid @enderror form-control"
                    name="age" value= "{{ old('age') }}"autocomplete="age">
                    
                  @error('age')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      <!-- message es llamado phone_number -->
                    </span>
                  @enderror
                </div>
              </div>


              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

