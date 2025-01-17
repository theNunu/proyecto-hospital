<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  @stack('scripts')

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


  <!-- para mostrar los medicos --><!-- Bootstrap CSS -->
  <link
    href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css"
    rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <img src="/img/mihospital.png" class="me-1">
        <!-- negar el home a quien no es usuario -->
        @if (!Auth::user() || !Auth::user()->is_admin)
          <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
          </a>
        @else
          <span class="navbar-brand">
            {{ config('app.name', 'Laravel') }}
          </span>
        @endif


        {{-- <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
        </a> --}}

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
              @if (Route::has('login'))
                <li class="nav-item">
                  <a class="nav-link"
                    href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
              @endif

              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link"
                    href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
              @endif
            @else
              @if (Auth::user()->is_admin)
                <!-- ENLACE AL PANEL DE ADMIN -->
                <li class="nav-item">
                  <a class="nav-link"
                    href="{{ route('admin.users.index') }}">Panel del admin</a>
                </li>
              @else
                <!-- ENLACES PARA USUARIOS  -->
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('consultas.index') }}">Mi
                    historial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"
                    href="{{ route('consultas.create') }}">Crear una nueva
                    consulta</a>
                </li>
              @endif
              {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('consultas.index') }}">Mi
                  historial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('consultas.create') }}">Crea
                  una nueva consulta</a>
              </li>

              <!-- ENLACE AL PANEL DE ADMIN -->
              @if (Auth::user()->id == 1)
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.users.index') }}">
                    Panel del admin</a> <!-- ENLACE AL PANEL DE ADMIN -->
                </li>
              @endif --}}

              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle"
                  href="#" role="button" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right"
                  aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}"
                    method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <main class="py-4">
      @if ($alert = session()->get('alert'))
        <x-alert :type="$alert['type']" :message="$alert['message']" />
        <!-- renderizar el componente alert -->
      @endif

      @yield('content')
    </main>
  </div>
  <!-- Bootstrap JS and dependencies -->
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js">
  </script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js">
  </script>
  {{-- <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script> --}}

  <!-- Bootstrap JS y dependencias -->
  {{-- <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js">
  </script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js">
  </script> --}}
  {{-- <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js">
  </script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js">
  </script> --}}




</body>

</html>
