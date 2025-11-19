@php
    $features = [
        [
            'icon' => 'globe',
            'title' => 'Comércio Global sem Fronteiras',
            'description' => 'Navegue pelo complexo mundo do comércio
internacional com total tranquilidade.
Cuidamos de toda a burocracia e das
exigências legais para que sua empresa esteja
sempre em conformidade, garantindo que suas
mercadorias cruzem fronteiras sem problemas.',
        ],
        [
            'icon' => 'brain',
            'title' => 'Inteligência para o Negócio',
            'description' => 'Trabalhe de forma mais inteligente, não mais
difícil. Aplicamos as melhores soluções para
acelerar seus processos e fornecer os insights
que você precisa para tomar decisões
otimizadas, impulsionando a eficiência de toda
a sua equipe.
',
        ],
        [
            'icon' => 'gauge',
            'title' => 'Transporte com Máxima Desempenho',
            'description' => 'Transforme seu transporte em um motor de
lucratividade. Otimizamos suas rotas e operações
para garantir o máximo de eficiência, reduzindo
custos e aumentando o desempenho de cada
entrega.',
        ],
        [
            'icon' => 'target',
            'title' => 'Operações Portuárias Conectadas',
            'description' => 'Garantimos que suas operações nos portos
sejam fluidas e eficientes. Através de uma rede
integrada, sua carga se move de forma rápida e
sem gargalos, do navio até o destino final.',
        ],
        [
            'icon' => 'target',
            'title' => 'Logística Guiada por Dados',
            'description' => 'Usamos o poder da informação para ter uma
cadeia logística mais eficiente. Com dados
precisos e em tempo real, você antecipa
problemas, otimiza rotas e toma decisões
estratégicas que colocam sua empresa
sempre um passo à frente.',
        ],
    ];
@endphp

<section class="section-light bg-white! py-20 md:py-32">
    <div class="container max-w-6xl px-6 md:px-12 lg:px-20">
        {{-- Main Features Grid --}}
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 mb-16">
            @foreach ($features as $index => $feature)
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl md:text-4xl font-semibold mb-3">{{ $feature['title'] }}</h3>
                            <p class="text-sm md:text-xl font-medium text-muted-foreground leading-6">
                                {{ $feature['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="space-y-4 self-end">
                <div class="flex-1">
                    <img src="{{ Vite::asset('resources/images/ativo-12.svg') }}" alt="" class="w-full h-auto">
                </div>
            </div>
        </div>
    </div>
</section>
