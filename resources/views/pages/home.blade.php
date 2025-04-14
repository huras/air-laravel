@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero-section text-white bg-black">
        <div class="container min-vh-100 d-flex align-items-center">
            <div class="row w-100">
                <div
                    class="col-lg-6 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper mx-auto">
                    <h1 class="fw-light home-hero-text">Nós</h1>
                    <h1 class="fw-light home-hero-text-secondary">somos a.</h1>
                </div>
                <div class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center home-hero-wrapper">
                    <img src="{{ asset('images/air_logo_home.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section text-white bg-black pt-5">
        <div class="container-fluid px-0 d-flex align-items-center home-hero-imgs-wrapper">
            <img src="{{ asset('images/home_bg_1.png') }}" alt="Air Logo Stroke" class="img-fluid w-100 hero-imgs-1">
            <img src="{{ asset('images/home_bg_2.png') }}" alt="Air Logo Stroke" class="img-fluid pe-4 w-100 hero-imgs-2">

            <div class="container call-2 d-flex flex-column justify-content-center text-start home-hero-img-call">
                <h2 class="fw-light">Respiramos</h2>
                <h2 class="fw-light">influência.</h2>
            </div>
        </div>
    </section>

    <section class="hero-section text-white bg-black py-5">
        <div class="container py-5">
            <div class="row text-center gy-4 home-hero-metrics">
                <div class="col d-flex flex-column align-items-center justify-content-end">
                    <img src="{{ asset('images/tiktok_marketing_partners.png') }}" alt="Air Logo Stroke" class="img-fluid">
                    <span class="metric-sub">Somos um dos principais parceiros de negócios da plataforma, provando que <span class="fw-800 text-white">criatividade não tem limites anos de mercado</span> </span>
                </div>
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="metric-title">15</div>
                    <span class="fw-bold">anos de mercado</span>
                    <span class="metric-sub">Pioneira em<br>Marketing de Influência</span>
                </div>
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="metric-title">+1.000</div>
                    <div>
                        <span class="fw-bold">campanhas</span>
                        <span class="metric-sub">transformadas<br>em conversas personalizadas</span>
                    </div>
                </div>
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="metric-title">+50</div>
                    <div>
                        <span class="fw-bold">marcas</span>
                        <span class="metric-sub">atendidas<br>simultaneamente</span>
                    </div>
                </div>
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="metric-title">80%</div>
                    <div class="fw-bold">taxa de retenção</div>
                    <div class="metric-sub">de clientes</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <!-- Texto Institucional -->
            <div class="row my-5">
                <div class="col-12 col-md-12 col-sm-12 mx-auto my-5">
                    <h5 class="fw-300 text-justify mb-0">
                        Nascemos para transformar a relação entre pessoas e marcas.
                        <br>
                        Unimos empatia, criatividade e tecnologia para transformar diálogos em campanhas memoráveis —
                        campanhas que geram conversas e impacto de verdade.
                    </h5>
                </div>
            </div>
    </section>

    <section>
        <div class="container-fluid text-black">
            <!-- Três Colunas -->
            <div class="row g-4">
                <!-- Coluna 1 -->
                <div class="col-12 col-md-4 px-4">
                    <h5 class="fw-600">A gente cria. Ouve. Estuda. Analisa. Mede. Conecta.</h5>
                    <p class="text-muted mt-3">
                        Fazemos com que marcas se conectem diretamente aos seus consumidores, trazendo para essa conversa, os criadores que mais transformam em conversão para as marcas.
                    </p>
                </div>

                <!-- Coluna 2 -->
                <div class="col-12 col-md-4 px-4">
                    <h5 class="fw-600">Aqui na AIR a gente acredita que criar impacto não é sorte — é método.</h5>
                    <p class="text-muted mt-3">
                        A gente combina inteligência com criatividade. O resultado: Impacto garantido!
                    </p>
                </div>

                <!-- Coluna 3 -->
                <div class="col-12 col-md-4 px-4">
                    <h5 class="fw-600">Somos pioneiros. Somos inquietos.</h5>
                    <p class="text-muted mt-3">
                        E para a gente, trazer os melhores resultados para nossas marcas, é tudo. Tudo mesmo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 py-5 bg-black text-white">
        <div class="container-fluid my-5">
            <!-- Bloco de introdução + comparação -->
            <div class="row  mb-5">

                <!-- Comparação Direita -->
                <div class="col-12 col-md-4 mx-auto">
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class='text-rainbow'>Plataforma AirSearch</h3>
                        <div class="d-flex justify-content-start align-items-end">
                            <div class='text-white fw-300 me-2'>BY</div>
                            <div>
                                <img src="{{ asset('images/air.png') }}" alt="Air" class="img-fluid">
                            </div>
                        </div>

                        <div class='my-5'>
                            <h5 class='fw-300 text-white'>Tecnologia</h5>
                            <p class='text-muted-b0b0b0'>Desbloqueie a influência que gera impacto e conecte-se já!</p>
                        </div>

                        <div class='my-5'>
                            <button type="button" class="btn btn-light">
                                <span class="fw-600">Assine já!</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mx-auto">
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class='text-rainbow'>Campanhas Customizadas</h3>
                        <div class="d-flex justify-content-start align-items-end">
                            <div class='text-white fw-300 me-2'>BY</div>
                            <div>
                                <img src="{{ asset('images/air.png') }}" alt="Air" class="img-fluid">
                            </div>
                        </div>

                        <div class='my-5'>
                            <h5 class='fw-300 text-white'>Agência</h5>
                            <p class='text-muted-b0b0b0'>Lance sua campanha agora e veja seus resultados imediatos! Gerenciamento completo para você focar só no sucesso!</p>
                        </div>

                        <div class='my-5'>
                            <button type="button" class="btn btn-light">
                                <span class="fw-600">Fale com a gente</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mx-auto">
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class='text-rainbow'>Insights</h3>
                        <div class="d-flex justify-content-start align-items-end">
                            <div class='text-white fw-300 me-2'>BY</div>
                            <div>
                                <img src="{{ asset('images/air.png') }}" alt="Air" class="img-fluid">
                            </div>
                        </div>

                        <div class='my-5'>
                            <h5 class='fw-300 text-white'>Insights</h5>
                            <p class='text-muted-b0b0b0'>Deciframos oportunidades, analisamos a saúde da sua marca, qualificamos sua fun base.</p>
                        </div>

                        <div class='my-5'>
                            <button type="button" class="btn btn-light">
                                <span class="fw-600">Fale com a gente</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mb-5">

                <!-- Comparação Direita -->
                <div class="col-12 col-md-4">
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class='text-rainbow'>Meu Air</h3>
                        <div class="d-flex justify-content-start align-items-end">
                            <div class='text-white fw-300 me-2'>BY</div>
                            <div>
                                <img src="{{ asset('images/air.png') }}" alt="Air" class="img-fluid">
                            </div>
                        </div>

                        <div class='my-5'>
                            <h5 class='fw-300 text-white'>Inteligência Artificial</h5>
                            <p class='text-muted-b0b0b0'>Liberte o Potencial da sua Marca: Conecte-se diretamente com a influência que faz a diferença.</p>
                        </div>

                        <div class='my-5'>
                            <button type="button" class="btn btn-light">
                                <span class="fw-600">Descubra o poder da IA</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mx-auto">
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class='text-rainbow'>Sou <br>Creator</h3>
                        <div class="d-flex justify-content-start align-items-end">
                            <div class='text-white fw-300 me-2'>BY</div>
                            <div>
                                <img src="{{ asset('images/air.png') }}" alt="Air" class="img-fluid">
                            </div>
                        </div>

                        <div class='my-5'>
                            <h5 class='fw-300 text-white'>Redes Sociais</h5>
                            <p class='text-muted-b0b0b0'>Conecte suas redes sociais e descubra o poder da sua influência. Sua voz merece ser ouvida pelas marcas! </p>
                        </div>

                        <div class='my-5'>
                            <button type="button" class="btn btn-light">
                                <span class="fw-600">Fale com a gente</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mx-auto">
                </div>

            </div>
        </div>
    </section>

@endsection
