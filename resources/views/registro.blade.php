@extends('layouts.registro')

<div class="d-lg-none">
    @include('includes.light-navbar')
</div>

@section('content')

    <div class="login d-flex font-space-grotesk text-2b2d42 vh-100">
        <aside class="col-3 d-none d-lg-block bg-1415">
            <a href="{{ route('homepage') }}"><img class="ps-5 ms-4 pt-5 mt-2"
                    src="{{ asset('assets/imgs/logos/login.svg') }}" alt="MTC logo - Home"></a>
            <img class="d-block mx-auto w-100 mt-5 pt-3" src="{{ asset('assets/imgs/decorative/login.svg') }}" alt=""
                aria-hidden="true">
        </aside>

        <main class="d-flex justify-content-center align-items-center bg-fa flex-grow-1 position-relative">
            <nav class="fs-16 position-absolute d-none d-lg-block" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active text-end "><a class="fs-15"
                            href="{{ url()->previous() }}">Voltar à pagina anterior</a>
                    </li>
                </ol>
            </nav>

            <div class="col-11 col-sm-8 col-md-7 col-lg-6 col-xl-5 col-xxl-4">
                <header class="text-start text-sm-center">
                    <h1 class="fs-36-40 fw-bold">Criar Conta</h1>
                    <p class="fw-500">Crie uma conta para usufruir do nosso serviço</p>
                </header>
                <form class="fs-14 fw-500" action="POST">

                    <div>
                        <p class="text-center fs-14 fw-500 text-2b2d42">
                            <span>1 de 2</span>
                            <span class="d-none">2 de 2</span>
                        </p>
                        <div class="progress bg-2b2d42 align-items-center">
                            <div class="progress-bar bg-secondary h-100" role="progressbar" style="width: 50%"
                                aria-valuenow="50" aria-valuemin="50" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <fieldset>
                        <section class="d-flex flex-column mt-3">
                            <label for="login-name">Nome</label>
                            <input class="bg-efefef border-0 rounded-03 py-2 ps-3" type="text" name="login-name"
                                id="login-name" autocomplete="name" minlength="2" maxlength="100" autofocus>
                        </section>
                        <section class="d-flex flex-column mt-3">
                            <label for="login-username">Usuário<sup class="text-danger">*</sup></label>
                            <input class="bg-efefef border-0 rounded-03 py-2 ps-3" type="text" name="login-username"
                                id="login-username" autocomplete="username" minlength="2" maxlength="30" required>
                        </section>
                        <section class="d-flex flex-column mt-3">
                            <label class="fs-16" for="login-email">Email<sup class="text-danger">*</sup></label>
                            <input class="bg-efefef border-0 rounded-03 py-2 ps-3" class="fs-16 border-1 rounded-5 py-2 ps-3"
                                type="email" inputmode="email" name="login-email" id="login-email" autocomplete="email"
                                minlength="6" maxlength="100" required>
                        </section>
                        <section class="d-flex justify-content-between gap-5 mt-3">
                            <div class="d-flex flex-column flex-grow-1">
                                <label for="login-pass">Password<sup class="text-danger">*</sup></label>
                                <input class="w-100 bg-efefef border-0 rounded-03 py-2 ps-3" type="password" name="login-pass"
                                    id="login-pass" autocomplete="new-password" minlength="6" maxlength="8" required>
                            </div>
                            <div class="d-flex flex-column flex-grow-1">
                                <label for="login-pass-rep">Repetir password<sup class="text-danger">*</sup></label>
                                <input class="w-100 bg-efefef border-0 rounded-03 py-2 ps-3" type="password" name="login-pass-rep"
                                    id="login-pass-rep" autocomplete="new-password" minlength="6" maxlength="8" required>
                            </div>
                        </section>
                        <section class="mt-5 text-center">
                            <button
                                class="d-block bg-secondary rounded-4 border-0 font-archivo fs-15 text-white mx-auto py-2 px-5" type="button">Continuar</button>
                            <p class="my-4 between-lines position-relative">Ou</p>
                            <a class="bg-white google-logo position-relative border border-color-ef fs-15 fw-500 test-2b2d42 text-decoration-none text-nowrap py-2 px-5"
                                href="" role="button">Criar conta com o google</a>
                        </section>
                    </fieldset>

                    <fieldset aria-current="step">
                        <section class="d-flex flex-column mt-3">
                            <label for="login-country">Nome</label>
                            <select class="bg-efefef border-0 rounded-03 py-2 ps-3" name="login-country"
                                id="login-country" required>
                                <option value="" disabled selected>
                                    Selecione o tipo de contratação
                                </option>
                                <option value="Opção 1">Opção 1</option>
                                <option value="Opção 2">Opção 2</option>
                                <option value="Opção 3">Opção 3</option>
                            </select>
                        </section>
                        <section class="d-flex flex-column mt-3">
                            <label for="login-username">Usuário<sup class="text-danger">*</sup></label>
                            <input class="bg-efefef border-0 rounded-03 py-2 ps-3" type="text" name="login-username"
                                id="login-username" autocomplete="username" minlength="2" maxlength="30" required>
                        </section>
                        <section class="d-flex flex-column mt-3">
                            <label class="fs-16" for="login-email">Email<sup class="text-danger">*</sup></label>
                            <input class="bg-efefef border-0 rounded-03 py-2 ps-3" class="fs-16 border-1 rounded-5 py-2 ps-3"
                                type="email" inputmode="email" name="login-email" id="login-email" autocomplete="email"
                                minlength="6" maxlength="100" required>
                        </section>
                        <section class="d-flex justify-content-between gap-5 mt-3">
                            <div class="d-flex flex-column flex-grow-1">
                                <label for="login-pass">Password<sup class="text-danger">*</sup></label>
                                <input class="w-100 bg-efefef border-0 rounded-03 py-2 ps-3" type="password" name="login-pass"
                                    id="login-pass" autocomplete="new-password" minlength="6" maxlength="8" required>
                            </div>
                            <div class="d-flex flex-column flex-grow-1">
                                <label for="login-pass-rep">Repetir password<sup class="text-danger">*</sup></label>
                                <input class="w-100 bg-efefef border-0 rounded-03 py-2 ps-3" type="password" name="login-pass-rep"
                                    id="login-pass-rep" autocomplete="new-password" minlength="6" maxlength="8" required>
                            </div>
                        </section>
                        <section class="mt-5 text-center">
                            <button
                                class="d-block bg-secondary rounded-4 border-0 font-archivo fs-15 text-white mx-auto py-2 px-5" type="button">Continuar</button>
                            <p class="my-4 between-lines position-relative">Ou</p>
                            <a class="bg-white google-logo position-relative border border-color-ef fs-15 fw-500 test-2b2d42 text-decoration-none text-nowrap py-2 px-5"
                                href="" role="button">Criar conta com o google</a>
                        </section>
                    </fieldset>

                </form>
            </div>

        </main>

    </div>

@endsection
