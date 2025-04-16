@extends('layouts.app')

@section('title', 'Soluções')

@section('content')
    <section class="text-white bg-black">
        <div class="container-fluid pt-5">
            <div class="row area-title-wrapper mt-5">
                <p class="text-muted-2 area-title-label">Creator</p>
            </div>
        </div>
        <div class="container d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-8 col-md-8 d-flex flex-column justify-content-center text-start">
                    <h1 class="fw-300">O match perfeito entre</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="text-white bg-black relative">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('images/sou-creator-hero.png') }}" class="img-fluid hero-logo">
                </div>
            </div>
        </div>

        <div class="container put-on-top-of-section">
            <div class="row">
                <div class="col-lg-8 col-md-8 me-auto d-flex flex-column justify-content-center text-start">
                    <h1 class="fw-300"> <span class="text-black">Marcas e Creators.</span></h1>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-80">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 px-5">
                    <h4 class='fw-600 text-rainbow'> Visibilidade </h4>
                    <p class="text-white fs-20"> Conecte-se e tenha seu perfil disponível para milhares de empresas que procuram influenciadores como você. </p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 px-5">
                    <h4 class='fw-600 text-rainbow'> Praticidade </h4>
                    <p class="text-white fs-20"> A partir do momento em que seu perfil está em nossa base, você estará visível para empresas interessadas em colaborações e parcerias. </p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 px-5">
                    <h4 class='fw-600 text-rainbow'> Destaque </h4>
                    <p class="text-white fs-20"> Una-se à nossa empresa, com 15 anos de experiência no mercado e uma reputação sólida, conquistando a confiança de grandes clientes em busca de publicidade digital.  </p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 px-5">
                    <h4 class='fw-600 text-rainbow'> Agilidade </h4>
                    <p class="text-white fs-20"> Para entrar em nossa plataforma, é muito simples! Basta preencher seu cadastro e conectar suas redes sociais desejadas. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-105 bg-black">
    </section>
    <x-rainbow-block-text
        title="Amplie sua chance de efetivar novos negócios!"
        button-text="Ir para o Meu Air"
        button-link="{{ route('my-air') }}"
    />

    {{-- --------------------- --}}

    <section class="py-5 bg-black text-white">
        <div class="container">
            <!-- Título principal -->
            <div class="row align-items-center mb-5 mt-5">
                <div class="col-lg-12 col-md-12 text-start">
                    <h1 class="fw-500 text-rainbow">Connect</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Primeira linha: imagem do celular + texto descritivo -->
            <div class="row mb-5 d-flex flex-row align-items-start justify-content-start plataforma">
                <div class="col-12 col-md-6 pe-0">
                    <img src="{{ asset('images/phone-on-keyboard.png') }}" alt="Phone and laptop" class="img-fluid hero-logo">
                </div>

                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start">
                    <h5 class="mb-3 fw-300 pe-2">Seu talento, sua vitrine!</h5>
                    <p class="text-muted-c3">
                        Temos novidades: <b class='fw-700 text-white'> uma marca demonstrou interesse em perfis como o seu para uma campanha incrível!</b>
                        <br><br>
                        Mas para ser notado, é preciso estar com o Instagram conectado.
                        Ao conectar, você ativa:
                        <br><br>

                        <div>
                            <li class="fw-300 text-muted-c3 li-paragraph">
                                Um mídia kit <b class="fw-600 text-white">atualizado automaticamente com suas métricas</b>.
                            </li>
                            <li class="fw-300 text-muted-c3 li-paragraph">
                                Seu perfil, <b class="fw-600 text-white">será visível para grandes marcas</b>, ampliando suas possibilidades de fechar uma campanha real.
                            </li>
                            <li class="fw-300 text-muted-c3 li-paragraph">
                                <b class="fw-600 text-white">Vitrine de oportunidades:</b> para você escolher as publis que mais se alinham ao seu perfil e autenticidade.
                            </li>
                        </div>
                    </p>
                </div>
            </div>
        </div>

        <x-rainbow-block-text
            title="Transforme audiência em oportunidades reais!"
            button-text="Faça agora o Connect"
            button-link="{{ route('my-air') }}"
        />

        <div class="container-fluid">
            <!-- Segunda linha: lista de benefícios + imagem da mulher -->
            <div class="row align-items-start mb-5 plataforma column-reverse-mobile">
                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300">
                    <ul class="list-unstyled text-muted-2 mb-0">
                        <li class="fw-300 mb-2 text-muted-2 li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
                            </svg>
                            Com o <b class="fw-600">Connect</b>, você terá um <b class="fw-600">Mídia Kit intuitivo e atualizado automaticamente, 100% gratuito</b>.
                        </li>
                        <li class="fw-300 mb-2 text-muted-2 li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
                            </svg>
                            Seu perfil será <b class="fw-600">visível para grandes marcas</b>, aumentando sua chance de fechar campanhas.
                        </li>
                        <li class="fw-300 mb-2 text-muted-2 li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
                            </svg>
                            <b class="fw-600">Contato direto com marcas</b>, facilitando negociações sem intermediários.
                        </li>
                        <li class="fw-300 mb-2 text-muted-2 li-paragraph">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
                            </svg>
                            <b class="fw-600">Vitrine de oportunidades</b> que possibilita a escolha de publis que mais se alinham ao seu perfil e autenticidade.
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 ps-0">
                    <img src="{{ asset('images/black-woman-flower.png') }}" alt="Mulher com flor" class="img-fluid hero-logo">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center mb-5 mt-5 plataforma">
                <div class="col-12 mx-auto mt-3">
                    <h3 class="fw-500 my-5"> Conecte suas redes sociais e descubra o poder da sua influência. Sua voz merece ser ouvida pelas marcas! </h2>
                    <div class="w-100 d-flex justify-content-center">
                        <a class="btn btn-light text-black mt-5" href="#">Faça agora o Connect</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ------------------------------------- --}}

    <section class="py-5 bg-black text-white">
        <div class="container">
            <!-- Título principal -->
            <div class="row align-items-center mb-5 mt-5">
                <div class="col-lg-12 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper">
                    <h1 class="fw-300 home-hero-text">HUB</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Primeira linha: imagem do notebook + texto descritivo -->
            <div class="row mb-5 d-flex flex-row align-items-start justify-content-start plataforma">
                <div class="col-12 col-md-6 pe-0">
                    <img src="{{ asset('images/laptop-colorful.png') }}" alt="Colorful laptop" class="img-fluid hero-logo">
                </div>

                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300 align-items-start">
                    <h5 class="mb-3 fw-300 pe-2">Automatize. Apareça. Monetize. <br>Sua carreira no marketing de influência no piloto automático.</h5>
                    <p class="text-muted-2 mb-4">
                        A revolução da influência começou! O Hub redefine o mercado digital para Creators, unindo automação inteligente, conexões estratégicas com marcas e novas formas de monetização.
                        <br><br>
                        Com a Aira, nossa inteligência artificial exclusiva, você terá um parceiro para cada etapa da sua jornada, desde a análise de dados até recomendações personalizadas.
                        <b class="fw-800">Junte-se a nós e construa o futuro da sua carreira!</b>
                        <br><br>
                        <b class="fw-800">Sua carreira de Creator nunca mais será a mesma!</b>
                    </p>
                </div>
            </div>

            <!-- Segunda linha: lista de benefícios + imagem da mulher de boina -->
            <div class="row align-items-start mb-5 plataforma column-reverse-mobile">
                <div class="col-12 col-md-6 mb-5 mb-md-0 fw-300">
                    <ul class="list-unstyled text-muted-2 mb-0">
                        <li class="fw-300 mb-2 text-muted-2 li-paragraph" style='line-height: 1.2;'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
                            </svg>
                            <b class="fw-800">Mais lucro com a audiência:</b> Aira sugere produtos ideais para o público do criador, aumentando as receitas.
                        </li>
                        <li class="fw-300 mb-2 text-muted-2 li-paragraph" style='line-height: 1.2;'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
                            </svg>
                            <b class="fw-800">Sugestões de conteúdo:</b> Indicações automáticas de posts com alto potencial de engajamento.
                        </li>
                        <li class="fw-300 mb-2 text-muted-2 li-paragraph" style='line-height: 1.2;'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
                            </svg>
                            <b class="fw-800">Contratos digitais simplificados:</b> Parcerias formalizadas com agilidade e segurança.
                        </li>
                        <li class="fw-300 mb-2 text-muted-2 li-paragraph" style='line-height: 1.2;'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
                            </svg>
                            <b class="fw-800">Mídia visual automatizada:</b> Geração rápida de imagens e vídeos com qualidade profissional.
                        </li>
                        <li class="fw-300 mb-2 text-muted-2 li-paragraph" style='line-height: 1.2;'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
                            </svg>
                            <b class="fw-800">Sem necessidade de estoque:</b> Redução de custos e espaço com operação 100% digital.
                        </li>
                        <li class="fw-300 mb-2 text-muted-2 li-paragraph" style='line-height: 1.2;'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
                            </svg>
                            <b class="fw-800">Curadoria inteligente de produtos:</b> Sugestões baseadas em dados, alinhadas ao perfil da audiência.
                        </li>
                        <li class="fw-300 mb-2 text-muted-2 li-paragraph" style='line-height: 1.2;'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
                            </svg>
                            <b class="fw-800">Gestão financeira automatizada:</b> Repasses organizados de forma eficiente com base nos contratos.
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 ps-0">
                    <img src="{{ asset('images/woman-red-hat.png') }}" alt="Mulher de boina" class="img-fluid hero-logo">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center mb-5 mt-5 plataforma">
                <div class="col-12 mx-auto mt-3 text-center" style="padding: 0px;">
                    <h3 class="fw-500 my-5" style="letter-spacing: -1px;">Sua carreira de Creator nunca mais será a mesma! Transforme seu futuro com o Hub!</h3>
                    <div class="w-100 d-flex justify-content-center">
                        <a class="btn btn-light text-black mt-3" href="#">Acesse agora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection


@section('footer-bg-theme', 'bg-white')
@section('footer-text-theme', 'text-black')
