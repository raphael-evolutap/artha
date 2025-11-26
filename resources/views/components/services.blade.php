@php
    $services = [
        [
            'title' => 'Transporte Aéreo',
            'description' => 'Soluções de transporte de
cargas por via aérea.',
        ],
        [
            'title' => 'Transporte Marítimo',
            'description' => 'Opções de frete marítimo
para diversos tipos de carga.',
        ],
        [
            'title' => 'Transporte Rodoviário',
            'description' => 'Transporte de mercadorias
por via terrestre.',
        ],
        [
            'title' => 'Transporte de Líquidos e Gases',
            'description' => 'Soluções para transporte de
cargas líquidas e gasosas.',
        ],
        [
            'title' => 'Seguro de Carga',
            'description' => 'Seguros para proteger as
mercadorias durante o
transporte.',
        ],
        [
            'title' => 'Carga Projeto',
            'description' => 'Gerenciamento de projetos de
logística para cargas especiais
e de grande porte.',
        ],
        [
            'title' => 'Logística Integrada',
            'description' => 'Soluções completas de logística
que integram diversas etapas da
cadeia de suprimentos.',
        ],
        [
            'title' => 'Cargas Consolidadas',
            'description' => 'Agrupamento de pequenas cargas
de diferentes clientes para otimizar
custos de transporte.',
        ],
    ];
@endphp

<section id="servicos" class="relative section-dark pb-20 md:pb-32">
    <div class="container max-w-6xl  top-[-42px] relative z-10 px-6 md:px-12 lg:px-20">
        <h2 class="text-4xl md:text-5xl text-black font-semibold mb-6">Serviços</h2>
    </div>
    <div class="absolute inset-0 z-0 bg-fixed unfix-ios-bg"
        style="background-image: url({{ Vite::asset('resources/images/BG_PARALAX.png') }});background-repeat: no-repeat; background-position: center center;background-size: cover;">

    </div>
    <div class="container max-w-6xl relative z-10 px-6 md:px-12 lg:px-20">


        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-20">
            @foreach ($services as $service)
                <div class="">

                    <h3 class="text-3xl font-semibold mb-3 leading-tight">{{ $service['title'] }}</h3>

                    <p class="text-xl text-white font-normal leading-6">{{ $service['description'] }}</p>

                    <div class="mt-6 opacity-60">
                        <img src="{{ Vite::asset('resources/svg/linha.svg') }}" class="w-10 " alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
