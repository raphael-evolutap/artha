<section id="quem-somos" class="section-dark py-20 md:pt-28 md:pb-20">
    <div class="container max-w-6xl px-6 md:px-12 lg:px-20">
        <div class="relative grid md:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="space-y-6">
                <h2 class="text-xl md:text-4xl font-semibold mb-8 tracking-widest">
                    {{ __('quem_somos.title') }}
                </h2>

                <div class="text-xl font-normal md:text-xl text-white leading-6 tracking-widest">
                    <p class="font-bold mb-4">
                        {{ __('quem_somos.text1') }}
                    </p>
                    <p class="mb-4">
                        {{ __('quem_somos.text2') }}
                    </p>

                    <p class="mb-4">
                        {{ __('quem_somos.text3') }}
                    </p>
                    <p class="mb-4">
                        {{ __('quem_somos.text4') }}
                    </p>
                </div>
            </div>

            <div class="relative hidden md:block">
                <div class="xl:absolute xl:bottom-[-420px] overflow-hidden rounded-lg">
                    <img src="{{ Vite::asset('resources/images/boat.png') }}" alt="Cargo ship navigating through ocean"
                        class="max-w-full xl:max-w-none object-cover" />
                </div>
            </div>
        </div>
    </div>
</section>
