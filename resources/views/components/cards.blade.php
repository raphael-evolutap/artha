@php
    $cards = [
        [
            'icon' => 'ativo-01',
            'title' => 'Logistica para qualquer lugar do mundo',
            'description' => 'Gerenciamento completo,
desde o planejamento inicial de
capacidade e a gestão de tarifas,
passando pela reserva em navios
e voos, até o transporte final.',
        ],
        [
            'icon' => 'ativo-02',
            'title' => 'Inteligência<br/>
e Automação<br/>
do Início ao Fim',
            'description' => 'Temos acesso direto a informações online
sobre voos e navios para os principais portos
e aeroportos do mundo. Isso economiza um
tempo precioso da sua equipe e aumenta a
precisão, garantindo que sua carga esteja
sempre no lugar certo, na hora certa.',
        ],
        [
            'icon' => 'ativo-03',
            'title' => 'Gestão de <br/>
Contêineres Precisa <br />
e Descomplicada',
            'description' => 'Operações complexas de contêineres e terminais
se tornam simples. Nosso sistema de gestão
otimiza e automatiza cada etapa, desde a chegada
no pátio até o embarque, garantindo total fluidez.',
        ],
        [
            'icon' => 'ativo-04',
            'title' => 'Conexão Direta
com os Portos',
            'description' => 'Conexões diretas com as
maiores transportadoras, agentes
e autoridades nos portos mais
movimentados do mundo. O
resultado? Menos tempo de espera
e mais economia para sua operação.
',
        ],
    ];

    function getCardClass($index)
    {
        if ($index === 0) {
            return 'col-span-full row-span-full lg:col-span-2 lg:row-span-3';
        } elseif ($index === 1) {
            return 'col-span-full lg:col-span-3 lg:row-span-3 lg:col-start-3';
        } elseif ($index === 2) {
            return 'col-span-full lg:col-span-3 lg:row-span-3 lg:row-start-4';
        } elseif ($index === 3) {
            return 'col-span-full lg:col-span-2 lg:row-span-3 lg:col-start-4 lg:row-start-4';
        }
    }
@endphp

<section class="section-light py-20 md:py-32">
    <div class="container max-w-6xl px-6 md:px-12 lg:px-20">
        <div class="text-center mb-16">
            <h2 class="font-semibold text-3xl md:text-4xl mb-4">
                O jeito Artha de fazer
            </h2>
        </div>

        <div class="grid grid-cols-1 grid-rows-4 md:grid-cols-5 md:grid-rows-6 gap-6 lg:gap-8">
            @foreach ($cards as $card)
                <div
                    class="flip-card card-dark p-8 md:p-12 rounded-4xl hover:bg-[hsl(var(--dark-bg-secondary))] transition-all duration-300 group cursor-pointer w-full @php echo getCardClass($loop->index); @endphp">
                    <div class="flip-card-inner">
                        <div class="flip-card-front flex flex-col items-start justify-between mb-6 tracking-widest">
                            <div>
                                <img src="{{ Vite::asset('resources/svg/' . $card['icon'] . '.svg') }}" alt=""
                                    class="w-12 h-12" />
                            </div>
                            {{-- <ArrowRight
                                class="w-6 h-6 text-white/40 group-hover:text-white transition-all group-hover:translate-x-1" /> --}}
                            <h3 class="my-10 text-xl md:text-5xl font-normal md:leading-10 text-left">
                                {!! $card['title'] !!}
                            </h3>
                            <div class="flex w-full justify-between items-center flex-row">
                                <img src="{{ Vite::asset('resources/svg/linha.svg') }}" alt=""
                                    class="w-12 h-12" />
                                <img class="w-6 h-6" src="{{ Vite::asset('resources/svg/arrow-right-white.svg') }}"
                                    alt="">
                                {{-- <x-icon name="arrow-right-white" class="w-6 h-6" /> --}}
                            </div>
                        </div>
                        <div class="flip-card-back tracking-widest">
                            <div>
                                <img src="{{ Vite::asset('resources/svg/' . $card['icon'] . '.svg') }}" alt=""
                                    class="w-12 h-12" />
                            </div>
                            <h3 class="my-6 text-xl md:text-4xl font-normal md:leading-10 text-left">
                                {!! $card['title'] !!}
                            </h3>
                            <p class="text-left text-base md:text-lg text-white/70 md:leading-8">
                                {{ $card['description'] }}
                            </p>
                        </div>
                    </div>


                </div>
            @endforeach
        </div>
        <div class="flex justify-center mt-12">
            <livewire:contact-form />
        </div>
    </div>
</section>
