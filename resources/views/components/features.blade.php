@php
    $features = [
        [
            'icon' => 'globe',
            'title' => __('features.feature1.title'),
            'description' => __('features.feature1.description'),
        ],
        [
            'icon' => 'brain',
            'title' => __('features.feature2.title'),
            'description' => __('features.feature2.description'),
        ],
        [
            'icon' => 'gauge',
            'title' => __('features.feature3.title'),
            'description' => __('features.feature3.description'),
        ],
        [
            'icon' => 'target',
            'title' => __('features.feature4.title'),
            'description' => __('features.feature4.description'),
        ],
        [
            'icon' => 'target',
            'title' => __('features.feature5.title'),
            'description' => __('features.feature5.description'),
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
