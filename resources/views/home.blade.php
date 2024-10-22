@extends('layouts.app')

@section('content')
  <!-- ===============================================================================================-->

  <header
    class="hero-section text-white d-flex align-items-center justify-content-center bg-primary">
    <div class="container text-center">
      <h1 class="display-4">Bienvenidos a Ovnimedical</h1>
      <p class="lead">Cuidamos tu salud con dedicación y profesionalismo</p>
    </div>
  </header>

  <section class="description-section py-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center">
          <h2 class="display-4">Sobre Nosotros</h2>
          <p class="lead">Ovnimedical es un hospital de renombre, dedicado a
            proporcionar atención médica de calidad con un equipo de profesionales
            altamente capacitados. Nuestro compromiso es garantizar el bienestar y
            la satisfacción de nuestros pacientes a través de servicios médicos de
            vanguardia y una atención personalizada.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow">
            <img src="img/place_hospital.jpg" class="card-img-top"
              alt="Nuestras Instalaciones">
            <div class="card-body">
              <h5 class="card-title">Nuestras Instalaciones</h5>
              <p class="card-text">Contamos con instalaciones modernas y equipadas
                con la última tecnología para ofrecerte la mejor atención.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow">
            <img src="img/team.jpg" class="card-img-top" alt="Nuestro Equipo">
            <div class="card-body">
              <h5 class="card-title">Nuestro Equipo</h5>
              <p class="card-text">Un equipo de profesionales dedicados a tu salud
                y bienestar, siempre listos para atenderte con la mejor
                disposición.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow">
            <img src="img/services.jpg" class="card-img-top"
              alt="Nuestros Servicios">
            <div class="card-body">
              <h5 class="card-title">Nuestros Servicios</h5>
              <p class="card-text">Ofrecemos una amplia gama de servicios médicos
                para satisfacer todas tus necesidades de salud.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="features-section py-5 bg-light">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2 class="display-4">Nuestros Valores</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow">
            <div class="card-body">
              <h5 class="card-title">Compromiso</h5>
              <p class="card-text">Nos comprometemos a brindar la mejor atención y
                servicios de salud a nuestros pacientes.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow">
            <div class="card-body">
              <h5 class="card-title">Innovación</h5>
              <p class="card-text">Implementamos las últimas tecnologías y
                prácticas médicas para ofrecer tratamientos de vanguardia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow">
            <div class="card-body">
              <h5 class="card-title">Calidad</h5>
              <p class="card-text">Nos esforzamos por alcanzar los más altos
                estándares de calidad en todos nuestros servicios médicos.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="row text-center mb-5">
    <div class="col">
      <h2 class="display-4">Nuestros Medicos</h2>
    </div>
  </div>

  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach ($medicos->chunk(2) as $index => $chunk)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
          <div class="row">
            @foreach ($chunk as $medico)
              <div class="col-6 d-flex justify-content-center">
                <x-medico_card :medico="$medico" />
              </div>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button"
      data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button"
      data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </body>

  <section class="contact-section py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 mb-4">
          <div class="card shadow"
            style="margin-left: -15px; margin-right: -15px;">
            <div class="card-body text-center">
              <h5 class="card-title">Contactanos</h5>
              <p class="card-text">Puedes comunicarte con nosotros a través de los
                siguientes medios:</p>
              <ul class="list-unstyled">
                <li><i class="fas fa-phone-alt"></i> Teléfono: (593) 653-4567</li>
                <li><i class="fas fa-envelope"></i> Email:
                  contacto@ovnimedical.com</li>
                <li><i class="fas fa-map-marker-alt"></i> Dirección: Francisco y
                  Coronel
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
