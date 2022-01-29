@extends('layouts.master')

@section('title', 'Home')

@include('includes.navbar')

@section('banner')

    <section class="bg-primary py-5">
        <div class="container mw-100 pb-5 mb-5 px-0">

            <div class="d-flex flex-column flex-xl-row justify-content-end font-space-grotesk pt-lg-5 mt-4 mt-xl-5">
                <div
                    class="col-10 col-xl-4 text-white align-self-center text-center text-xl-start me-xl-5 pe-xxl-5 pt-xl-5 ps-xl-5 ps-xxl-4">
                    <h1 class="fw-bold ls-1 fs-36-64 mb-3 mt-5 mt-xxl-0">Sms Marketing desde <span
                            class="text-secondary">0.019€</span></h1>
                    <p class="fs-18-22 pb-5 mb-0 mb-lg-3">Com uma taxa de leitura de 99,9%, e com custos de entrega desde 1,9
                        CENT. por mensagem o SMS
                        Marketing é de longe e sem duvida o mais eficiente canal de que dispõe para veicular a sua
                        comunicação. </p>
                    <a class="bg-secondary text-white fw-500 text-decoration-none rounded-4 py-3 px-5 fs-18"
                        href="{{ route('registro') }}" role="button">Registro</a>
                </div>
                <div class="col-12 col-xl-6 ps-lg-2 pt-lg-4 ps-xl-5 align-self-xl-center pt-5 pt-xl-0 mt-5 mt-xl-0">
                    <img class="d-block img-fluid mx-auto mx-xl-0" src="{{ asset('assets/imgs/banners/home.svg') }}" alt=""
                        aria-hidden="true">
                </div>
            </div>

        </div>
    </section>

    <section class="bg-primary font-space-grotesk pb-5 pt-4">
        <div class="container pb-5 pb-lg-6">

            <header class="col-lg-7 col-xxl-6 text-center mx-auto pb-4">
                <h2 class="text-white fw-bold fs-30-36 mb-3">Envie SMS’s em Massa ao melhor preço do mercado </h2>
                <p class="col-10 col-xl-9 fw-light fs-18-20 text-d3d2 mx-auto">Enviar SMS nas suas campanhas de Marketing
                    nunca foi tão simples e
                    descomplicado</p>
            </header>

            <div class="row justify-content-center gap-4 pt-4 pt-lg-5 mt-lg-2">
                <div class="col-11 col-md-7 col-lg-5 col-xxl bg-1d1e1f rounded-20 p-4">
                    <p class="text-5d fw-500 fs-20 pt-2 mb-0">01</p>
                    <div class="d-flex align-itens-center card-img-height">
                        <img class="ps-2 img-fluid" src="{{ asset('assets/imgs/cards/card-1.svg') }}" alt=""
                            aria-hidden="true">
                    </div>
                    <div class="ps-2">
                        <h3 class="text-ef fw-500 fs-22">Importe os seus contactos</h3>
                        <p class="fs-16-18 text-d3d2 fw-light">Pode gerir os seus contactos de forma rápida e eficiente.
                            Importe-os atravêz dos nossos formatos CVS ou TXT, e tenha os seus contactos prontos em
                            segundos.</p>
                    </div>
                </div>

                <div class="col-11 col-md-7 col-lg-5 col-xxl bg-1d1e1f rounded-20 p-4 mt-3 mt-lg-0">
                    <p class="text-5d fw-500 fs-20 pt-2 mb-0">02</p>
                    <div class="d-flex align-itens-center card-img-height">
                        <img class="ps-2 img-fluid" src="{{ asset('assets/imgs/cards/card-2.svg') }}" alt=""
                            aria-hidden="true">
                    </div>
                    <div class="ps-2">
                        <h3 class="text-ef fw-500 fs-22">Escreva a sua mensagem</h3>
                        <p class="fs-16-18 text-d3d2 fw-light">Escreva a mensagem que deseja enviar, personalizando
                            diferentes campos e até mesmo o seus contactos.</p>
                    </div>
                </div>

                <div class="col-11 col-md-7 col-lg-5 col-xxl bg-1d1e1f rounded-20 p-4 mt-3 mt-lg-0">
                    <p class="text-5d fw-500 fs-20 pt-2 mb-0">03</p>
                    <div class="d-flex align-itens-center card-img-height">
                        <img class="ps-2 img-fluid" src="{{ asset('assets/imgs/cards/card-3.svg') }}" alt=""
                            aria-hidden="true">
                    </div>
                    <div class="ps-2 pe-1">
                        <h3 class="text-ef fw-500 fs-22">Enviar</h3>
                        <p class="fs-16-18 text-d3d2 fw-light">Envie a sua mensagem personalizada, onde posteriormente
                            poderá aceder aos nossos serviços para ver todas as estatisticas da sua campanha de marketing
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="font-space-grotesk pt-lg-5">
        <div class="container pt-3 mt-2 pt-lg-0 mt-lg-0">
            <header class="text-center pb-4 pt-5">
                <h2 class="fs-30-36 fw-bold text-1415">As mais completas estatísticas de envio</h2>
                <p class="col-lg-6 fs-18-20 fw-light text-1d1e1f mx-auto">A partir do nosso software é disponibilizado as
                    mais completas estatísticas de envio, de modo a ter o controlo total sobre a eficiencia da sua campanha
                    da marketing.</p>
            </header>

            <ul class="nav nav-tabs justify-content-between border-0 gap-5 gap-xxl-0 mt-5" id="statistics-tablist" role="tablist">
                <li class="nav-item col-lg-3 col-xxl-auto" role="presentation">
                    <img class="d-block mx-auto" src="{{ asset('assets/imgs/icons/earth.svg') }}" alt=""
                        aria-hidden="true">
                    <button class="nav-link fs-18 fw-500 border-0 px-0 mx-auto mx-xxl-0 active" id="panel-1-tab" data-bs-toggle="tab"
                        data-bs-target="#panel-1" type="button" role="tab" aria-controls="panel-1"
                        aria-selected="true">Estatísticas globais</button>
                    <div class="rounded-pill tab-decoration-bar" aria-hidden="true"></div>
                </li>
                <li class="nav-item col-lg-3 col-xxl-auto" role="presentation">
                    <img class="d-block mx-auto" src="{{ asset('assets/imgs/icons/tv.svg') }}" alt="" aria-hidden="true">
                    <button class="nav-link fs-18 fw-500 border-0 px-0 mx-auto mx-xxl-0" id="panel-2-tab" data-bs-toggle="tab"
                        data-bs-target="#panel-2" type="button" role="tab" aria-controls="panel-2"
                        aria-selected="false">Diagramas completos</button>
                    <div class="rounded-pill tab-decoration-bar" aria-hidden="true"></div>
                </li>
                <li class="nav-item col-lg-3 col-xxl-auto" role="presentation">
                    <img class="d-block mx-auto" src="{{ asset('assets/imgs/icons/euro.svg') }}" alt=""
                        aria-hidden="true">
                    <button class="nav-link fs-18 fw-500 border-0 px-0 mx-auto mx-xxl-0" id="panel-3-tab" data-bs-toggle="tab"
                        data-bs-target="#panel-3" type="button" role="tab" aria-controls="panel-3"
                        aria-selected="false">Discriminação de
                        custos</button>
                    <div class="rounded-pill tab-decoration-bar" aria-hidden="true"></div>
                </li>
                <li class="nav-item col-lg-3 col-xxl-auto" role="presentation">
                    <img class="d-block mx-auto" src="{{ asset('assets/imgs/icons/graphics.svg') }}" alt=""
                        aria-hidden="true">
                    <button class="nav-link fs-18 fw-500 border-0 px-0 mx-auto mx-xxl-0" id="panel-4-tab" data-bs-toggle="tab"
                        data-bs-target="#panel-4" type="button" role="tab" aria-controls="panel-4"
                        aria-selected="false">Estatísticas por
                        país</button>
                    <div class="rounded-pill tab-decoration-bar" aria-hidden="true"></div>
                </li>
                <li class="nav-item col-lg-3 col-xxl-auto" role="presentation">
                    <img class="d-block mx-auto" src="{{ asset('assets/imgs/icons/calendar.svg') }}" alt=""
                        aria-hidden="true">
                    <button class="nav-link fs-18 fw-500 border-0 px-0 mx-auto mx-xxl-0" id="panel-5-tab" data-bs-toggle="tab"
                        data-bs-target="#panel-5" type="button" role="tab" aria-controls="panel-5"
                        aria-selected="false">Calendário de envios</button>
                    <div class="rounded-pill tab-decoration-bar" aria-hidden="true"></div>
                </li>
                <li class="nav-item col-lg-3 col-xxl-auto" role="presentation">
                    <img class="d-block mx-auto" src="{{ asset('assets/imgs/icons/upload.svg') }}" alt=""
                        aria-hidden="true">
                    <button class="nav-link fs-18 fw-500 border-0 px-0 mx-auto mx-xxl-0" id="panel-6-tab" data-bs-toggle="tab"
                        data-bs-target="#panel-6" type="button" role="tab" aria-controls="panel-6"
                        aria-selected="false">Estado do envio</button>
                    <div class="rounded-pill tab-decoration-bar" aria-hidden="true"></div>
                </li>
            </ul>

            <div class="tab-content mt-6" id="statistics-tablist-content">
                <div class="tab-pane fade bg-edeef0 rounded-30 pt-4 pb-5 show active" id="panel-1" role="tabpanel"
                    aria-labelledby="panel-1-tab">
                    <div class="col-10 d-flex justify-content-between align-items-center py-5 mx-auto">
                        <div class="text-1415 ps-lg-2">
                            <h4 class="fs-20-24 fw-500 mb-4">Estatísticas globais</h4>
                            <p class="col-8 fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, sed
                                optio
                                tenetur iusto, incidunt voluptate beatae itaque quo ex, voluptatum veniam porro. Omnis,
                                nulla
                                libero porro tenetur magni at eos.</p>
                        </div>
                        <div class="col-lg-7">
                            <img class="img-fluid rounded-12" src="{{ asset('assets/imgs/panels/panel-1.png') }}" alt=""></div>
                    </div>
                </div>
                <div class="tab-pane fade bg-edeef0 rounded-30 pt-4 pb-5" id="panel-2" role="tabpanel" aria-labelledby="panel-2-tab">
                    <div class="col-10 d-flex justify-content-between align-items-center py-5 mx-auto">
                        <div class="text-1415 ps-lg-2">
                            <h4 class="fs-20-24 fw-500 mb-4">Diagramas completos</h4>
                            <p class="col-8 fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, sed
                                optio
                                tenetur iusto, incidunt voluptate beatae itaque quo ex, voluptatum veniam porro. Omnis,
                                nulla
                                libero porro tenetur magni at eos.</p>
                        </div>
                        <div class="col-lg-7">
                            <img class="img-fluid rounded-12" src="{{ asset('assets/imgs/panels/panel-2.png') }}" alt=""></div>
                    </div>
                </div>
                <div class="tab-pane fade bg-edeef0 rounded-30 pt-4 pb-5" id="panel-3" role="tabpanel" aria-labelledby="panel-3-tab">
                    <div class="col-10 d-flex justify-content-between align-items-center py-5 mx-auto">
                        <div class="text-1415 ps-lg-2">
                            <h4 class="fs-20-24 fw-500 mb-4">Discriminação de custos</h4>
                            <p class="col-8 fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, sed
                                optio
                                tenetur iusto, incidunt voluptate beatae itaque quo ex, voluptatum veniam porro. Omnis,
                                nulla
                                libero porro tenetur magni at eos.</p>
                        </div>
                        <div class="col-lg-7">
                            <img class="img-fluid rounded-12" src="{{ asset('assets/imgs/panels/panel-3.png') }}" alt=""></div>
                    </div>
                </div>
                <div class="tab-pane fade bg-edeef0 rounded-30 pt-4 pb-5" id="panel-4" role="tabpanel" aria-labelledby="panel-4-tab">
                    <div class="col-10 d-flex justify-content-between align-items-center py-5 mx-auto">
                        <div class="text-1415 ps-lg-2">
                            <h4 class="fs-20-24 fw-500 mb-4">Estatísticas por país</h4>
                            <p class="col-8 fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, sed
                                optio
                                tenetur iusto, incidunt voluptate beatae itaque quo ex, voluptatum veniam porro. Omnis,
                                nulla
                                libero porro tenetur magni at eos.</p>
                        </div>
                        <div class="col-lg-7">
                            <img class="img-fluid rounded-12" src="{{ asset('assets/imgs/panels/panel-4.png') }}" alt=""></div>
                    </div>
                </div>
                <div class="tab-pane fade bg-edeef0 rounded-30 pt-4 pb-5" id="panel-5" role="tabpanel" aria-labelledby="panel-5-tab">
                    <div class="col-10 d-flex justify-content-between align-items-center py-5 mx-auto">
                        <div class="text-1415 ps-lg-2">
                            <h4 class="fs-20-24 fw-500 mb-4">Calendário de envios</h4>
                            <p class="col-8 fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, sed
                                optio
                                tenetur iusto, incidunt voluptate beatae itaque quo ex, voluptatum veniam porro. Omnis,
                                nulla
                                libero porro tenetur magni at eos.</p>
                        </div>
                        <div class="col-lg-7">
                            <img class="img-fluid rounded-12" src="{{ asset('assets/imgs/panels/panel-5.png') }}" alt=""></div>
                    </div>
                </div>
                <div class="tab-pane fade bg-edeef0 rounded-30 pt-4 pb-5" id="panel-6" role="tabpanel" aria-labelledby="panel-6-tab">
                    <div class="col-10 d-flex justify-content-between align-items-center py-5 mx-auto">
                        <div class="text-1415 ps-lg-2">
                            <h4 class="fs-20-24 fw-500 mb-4">Estado do envio</h4>
                            <p class="col-8 fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, sed
                                optio
                                tenetur iusto, incidunt voluptate beatae itaque quo ex, voluptatum veniam porro. Omnis,
                                nulla
                                libero porro tenetur magni at eos.</p>
                        </div>
                        <div class="col-lg-7">
                            <img class="img-fluid rounded-12" src="{{ asset('assets/imgs/panels/panel-6.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section style="min-height: 100vh"></section>




@endsection
