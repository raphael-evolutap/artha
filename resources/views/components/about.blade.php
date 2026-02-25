<section id="about" class="bg-white py-20 md:py-32">
    <div class="container max-w-6xl mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid md:grid-cols-2 gap-8 lg:gap-24 items-end-safe justify-center">
            <div>
                <div class="mb-8">
                    <img class="w-18 h-18" src="{{ Vite::asset('resources/images/ativo-17.svg') }}" alt="">
                </div>
                <p class="font-bold text-2xl">{{ __('about.title') }}</p>
                <h3
                    class="mt-4 text-3xl md:text-4xl font-semibold mb-6 leading-10 border-y-2 border-black pt-8 pb-10 tracking-wide">
                    {!! __('about.subtitle') !!}
                </h3>
            </div>

            <div class="font-medium text-base md:text-2xl text-foreground/80 leading-6 lg:pt-28 tracking-wider">
                <p class="mb-3">
                    {{ __('about.text1') }}
                </p>
                <p class="mb-3 font-bold">
                    {{ __('about.text2') }}
                </p>
                <p class="mb-3">
                    {{ __('about.text3') }}
                </p>
                <p class="">
                    {{ __('about.text4') }}
                </p>
            </div>
        </div>
    </div>
</section>
