@extends('layouts.master')

@section('title', 'Home')

@include('includes.navbar')

@section('banner')

    <section class="bg-primary py-5">
        <div class="container mw-100 pb-5 mb-5 px-0">

            <div class="d-flex flex-column flex-xl-row justify-content-end font-space-grotesk pt-lg-5 mt-4 mt-xl-5">
                <div class="col-10 col-xl-4 text-white align-self-center text-center text-xl-start me-xl-5 pe-xxl-5 pt-xl-5 ps-xl-5 ps-xxl-4">
                    <h1 class="fw-bold ls-1 fs-36-64 mb-3 mt-5 mt-xxl-0">Sms Marketing desde <span class="text-secondary">0.019€</span></h1>
                    <p class="fs-18-22 pb-5 mb-0 mb-lg-3">Com uma taxa de leitura de 99,9%, e com custos de entrega desde 1,9 CENT. por mensagem o SMS
                        Marketing é de longe e sem duvida o mais eficiente canal de que dispõe para veicular a sua
                        comunicação. </p>
                    <a class="bg-secondary text-white fw-500 text-decoration-none rounded-4 py-3 px-5 fs-18"
                        href="{{ route('registro') }}" role="button">Registro</a>
                </div>
                <div class="col-12 col-xl-6 ps-lg-2 pt-lg-4 ps-xl-5 align-self-xl-center pt-5 pt-xl-0 mt-5 mt-xl-0">
                    <img class="d-block img-fluid mx-auto mx-xl-0" src="{{ asset('assets/imgs/banners/home.svg') }}" alt="" aria-hidden="true">
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container py-5"></div>
    </section>


@endsection
