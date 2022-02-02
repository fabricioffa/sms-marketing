<aside class="bg-primary fixed-top d-flex border-bottom border-color-navbar-dark">
    <nav class="navbar navbar-expand-lg navbar-dark col-12 col-lg-10 col-xl-9 bg-primary ms-auto mx-lg-auto px-3 px-lg-5">
        <div class="container-fluid py-1">
            <a class="navbar-brand d-none d-lg-block" href="{{ route('homepage') }}"><img
                    src="{{ asset('assets/imgs/logos/dark-navbar.svg') }}" alt=""></a>
            <button class="navbar-toggler d-block d-lg-none ms-auto ms-lg-0 " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav gap-4 fw-500 align-items-baseline font-space-grotesk">
                    <li class="nav-item dropdown">
                        <a class="nav-link position-relative dropdown-toggle text-white
                        {{ in_array( request()->path(), ['em-massa', 'para-empresa', 'rotas-sim', 'sem-restricoes']) ? 'checked' : null }}" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            SMS Marketing
                        </a>
                        <ul class="dropdown-menu bg-primary rounded-10" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white" href="{{ route('em-massa') }}">SMS em Massa</a>
                            </li>
                            <li><a class="dropdown-item text-white" href="{{ route('para-empresa') }}">SMS massivos
                                    para empresas</a></li>
                            <li><a class="dropdown-item text-white" href="{{ route('rotas-sim') }}">SMS por Rotas
                                    SIM</a></li>
                            <li><a class="dropdown-item text-white" href="{{ route('sem-restricoes') }}">SMS sem
                                    Restrições</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative text-white {{ request()->path() == 'apis' ? 'checked' : null }}" href="{{ route('apis') }}" tabindex="-1"
                            aria-disabled="true">Apis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative text-white font-archivo {{ request()->path() == 'precos' ? 'checked' : null }}" href="{{ route('precos') }}">Preços</a>
                    </li>
                    <a class="bg-secondary btn-padding text-white  text-decoration-none rounded-4"
                        href="{{ route('registro') }}" role="button">Registro</a>
                </ul>
            </div>
        </div>
    </nav>
</aside>
