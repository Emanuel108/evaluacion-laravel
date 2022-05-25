<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Evaluación</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}" href="{{ route('actividad.index') }}">
                  Actividades
                </a>
              </li>
              <li class="nav-item">
                <a class="{{ Request::path() === 'dependencias' ? 'nav-link active' : 'nav-link' }}" href="{{ route('dependencia.index') }}">
                  Dependencias
                </a>
              </li>
            </ul>
        </div>
    </div>
</nav>