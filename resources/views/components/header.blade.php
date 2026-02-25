    <section class="relative overflow-hidden pb-24 md:pb-32 lg:pb-44">

        <div class="fixed inset-0 -z-40 top-0 left-0 w-dvw"
            style="background-image: url({{ Vite::asset('resources/images/BG_1X.png') }}); background-position: center center;background-size: cover; background-repeat: no-repeat;">

        </div>
        <header class="relative bg-transparent">
            <div class="container max-w-lvw px-6 md:px-12">
                <div class="flex justify-center md:justify-between">
                    <div class="my-14  mt-20">
                        <a href="{{ route('home') }}">
                            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" class="w-64">
                        </a>
                    </div>
                    <div class="md:flex flex-col uppercase text-white gap-y-6 font-light text-lg mt-30 hidden">
                        <div class="flex gap-4">
                            <a href="{{ route('lang.switch', ['locale' => 'pt_BR']) }}"
                                class="text-white hover:text-gray-300">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Flag_of_Brazil.svg"
                                    alt="Portuguese" class="w-6 h-4" />
                            </a>
                            <a href="{{ route('lang.switch', ['locale' => 'en']) }}"
                                class="text-white hover:text-gray-300">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg"
                                    alt="English" class="w-6 h-4" />
                            </a>
                        </div>
                        <a href="#about">{{ __('header.nav.proposito') }}</a>
                        <a href="#quem-somos">{{ __('header.nav.quem_somos') }}</a>
                        <a href="#o-jeito-artha-de-fazer">{{ __('header.nav.jeito_artha') }}</a>
                        <a href="#servicos">{{ __('header.nav.servicos') }}</a>
                        <a href="#atendimento">{{ __('header.nav.atendimento') }}</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="container max-w-7xl relative z-10 px-6 md:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div class="flex flex-col w-full">
                    <div class="mb-8">
                        <h1
                            class="leading-14 font-semibold text-4xl md:text-5xl lg:text-6xl text-white tracking-widest relative">
                            <span class="font-normal relative text-stone-300">
                                <img class="w-14 h-14 absolute right-0 -top-10 hidden lg:block"
                                    src="{{ Vite::asset('resources/images/ativo-21.svg') }}" alt="">
                                {!! __('header.title_line1') !!}
                            </span>
                            <br />
                            {!! __('header.title_line2') !!}
                        </h1>
                    </div>

                    <p class="text-white/80 text-sm md:text-2xl   max-w-3/4 mb-12 leading-7">
                        {!! __('header.description') !!}
                    </p>
                    <div>
                        <img class="w-12" src="{{ Vite::asset('resources/svg/linha.svg') }}" alt="">
                    </div>

                </div>
                <div class="flex self-end-safe w-full justify-center">
                    <livewire:contact-form :style="'mb-12'" />
                </div>
            </div>
    </section>
