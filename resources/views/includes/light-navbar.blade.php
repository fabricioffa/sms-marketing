<aside class="bg-white fixed-top d-flex border-bottom border-color-navbar-light">
    <nav class="navbar navbar-expand-lg navbar-light col-lg-12 bg-white ms-auto mx-lg-auto px-3 px-lg-5">
        <div class="container py-1">
            <a class="navbar-brand d-none d-lg-block" href="{{ route('homepage') }}"><img
                    src="{{ asset('assets/imgs/logos/light-navbar.svg') }}" alt=""></a>
            <button class="navbar-toggler d-block d-lg-none ms-auto ms-lg-0 " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav gap-4 fw-500 align-items-baseline font-space-grotesk">
                    <li class="nav-item dropdown">
                        <a class="nav-link position-relative dropdown-toggle text-light-navbar
                        {{ in_array( request()->path(), ['homepage', 'em-massa', 'para-empresa', 'rotas-sim', 'sem-restricoes']) ? 'checked' : null }}" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            SMS Marketing
                        </a>
                        <ul class="dropdown-menu bg-white rounded-10" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-light-navbar" href="{{ route('em-massa') }}">SMS em Massa</a>
                            </li>
                            <li><a class="dropdown-item text-light-navbar" href="{{ route('para-empresa') }}">SMS massivos
                                    para empresas</a></li>
                            <li><a class="dropdown-item text-light-navbar" href="{{ route('rotas-sim') }}">SMS por Rotas
                                    SIM</a></li>
                            <li><a class="dropdown-item text-light-navbar" href="{{ route('sem-restricoes') }}">SMS sem
                                    Restrições</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative text-light-navbar {{ request()->path() == 'apis' ? 'checked' : null }}" href="{{ route('apis') }}" tabindex="-1"
                            aria-disabled="true">Apis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative text-light-navbar font-archivo {{ request()->path() == 'precos' ? 'checked' : null }}" href="{{ route('precos') }}">Preços</a>
                    </li>
                    <a class="bg-secondary btn-padding text-white  text-decoration-none rounded-4"
                        href="{{ route('registro') }}" role="button">Registro</a>
                </ul>
            </div>
        </div>
    </nav>
</aside>
