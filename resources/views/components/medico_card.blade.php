<div class="card" style="width: 18rem;">
  <img src="{{ $medico->url_image }}" class="card-img-top"
    alt="{{ $medico->nombre }} {{ $medico->apellido }}"
    style="height: 200px; object-fit: cover;">
  <div class="card-body">
    <h5 class="card-title">{{ $medico->nombre }} {{ $medico->apellido }}</h5>
    <p class="card-text">{{ $medico->description }}</p>
  </div>
</div>
