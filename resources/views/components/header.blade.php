    <section class="relative overflow-hidden pb-24 md:pb-32 lg:pb-44">

        <div class="absolute inset-0 z-0 bg-fixed"
            style="background-image: url({{ Vite::asset('resources/images/BG_1X.png') }}); background-position: center center;background-size: cover; background-repeat: no-repeat;">
            <div class="absolute inset-0 bg-black/70">
            </div>
        </div>
        <header class="relative bg-transparent">
            <div class="container max-w-lvw px-6 md:px-12 lg:px-28">
                <div class="flex justify-center md:justify-between items-center">
                    <div class="my-14 md:my-0">
                        <a href="{{ route('home') }}">
                            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" class="w-70">
                        </a>
                    </div>
                    <div class="md:flex flex-col uppercase text-white gap-y-2 font-light text-lg mt-20 hidden">
                        <a href="#about">Nosso Propósito</a>
                        <a href="#quem-somos">Quem Somos</a>
                        <a href="#">O jeito Artha</a>
                        <a href="#">Serviços</a>
                        <a href="#">Atendimento</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="container max-w-7xl relative z-10 px-6 md:px-12 lg:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="flex flex-col w-full">
                    <div class="mb-8">
                        <h1
                            class="leading-14 font-semibold text-4xl md:text-6xl lg:text-7xl text-white tracking-widest relative">
                            <img class="w-14 h-14 absolute right-0 -top-10 hidden lg:block"
                                src="{{ Vite::asset('resources/images/ativo-21.svg') }}" alt="">
                            <span class="font-normal relative">
                                Simplificamos
                                <br />
                                a logística global
                            </span>
                            <br />
                            para quem quer
                            <br />
                            crescer de verdade.
                        </h1>
                    </div>

                    <p class="text-white/80 text-sm md:text-2xl   max-w-3/4 mb-12 leading-7">
                        Sua cadeia de suprimentos nas mãos de<br />
                        especialistas comprometidos em encontrar a <br />
                        solução mais inteligente e eficiente para sua <br />
                        carga, seja qual for o seu volume de operações.
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
