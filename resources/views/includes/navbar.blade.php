<nav class="col-lg-9 mx-auto navbar navbar-expand-lg navbar-dark bg-primary px-lg-5">
    <div class="container-fluid py-1">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img
                src="{{ asset('assets/imgs/logos/navbar.svg') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav gap-4 fw-500 align-items-baseline">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        SMS Marketing
                    </a>
                    <ul class="dropdown-menu bg-primary rounded-10" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="#">SMS em Massa</a></li>
                        <li><a class="dropdown-item text-white" href="#">SMS massivos para empresas</a></li>
                        <li><a class="dropdown-item text-white" href="#">SMS por Rotas SIM</a></li>
                        <li><a class="dropdown-item text-white" href="#">SMS sem Restrições</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">Apis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Preços</a>
                </li>
                <a class="bg-secondary text-white text-decoration-none rounded-4 py-3 px-5" href="#" role="button">Registro</a>
            </ul>
        </div>
    </div>
</nav>
