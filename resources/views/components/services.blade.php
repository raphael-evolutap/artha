@php
    $services = [
        [
            'title' => __('services.service1.title'),
            'description' => __('services.service1.description'),
        ],
        [
            'title' => __('services.service2.title'),
            'description' => __('services.service2.description'),
        ],
        [
            'title' => __('services.service3.title'),
            'description' => __('services.service3.description'),
        ],
        [
            'title' => __('services.service4.title'),
            'description' => __('services.service4.description'),
        ],
        [
            'title' => __('services.service5.title'),
            'description' => __('services.service5.description'),
        ],
        [
            'title' => __('services.service6.title'),
            'description' => __('services.service6.description'),
        ],
        [
            'title' => __('services.service7.title'),
            'description' => __('services.service7.description'),
        ],
        [
            'title' => __('services.service8.title'),
            'description' => __('services.service8.description'),
        ],
    ];
@endphp

<section id="servicos" class="relative section-dark pb-20 md:pb-32">
    <div class="container max-w-6xl  top-[-42px] relative z-10 px-6 md:px-12 lg:px-20">
        <h2 class="text-4xl md:text-5xl text-black font-semibold mb-6">{{ __('services.title') }}</h2>
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
