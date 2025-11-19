<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0 bg-fixed"
        style="background-image: url({{ Vite::asset('resources/images/BG_1X.png') }}); background-size: cover; background-position: center;">
        <div class="absolute inset-0">
        </div>
    </div>

    <div class="container max-w-7xl relative z-10 px-6 md:px-12 lg:px-20">
        <div class="flex flex-row items-center">
            <div class="flex flex-col w-full">
                <div class="mb-8">

                    <h1 class="leading-14 font-medium text-4xl md:text-6xl lg:text-7xl text-white">
                        <span class="font-extralight relative">
                            <img class="w-14 h-14 absolute right-0 -top-2.5"
                                src="{{ Vite::asset('resources/images/ativo-21.svg') }}" alt="">
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



                <p class="text-white/80 text-sm md:text-2xl   max-w-3/4 mb-12 leading-relaxed">
                    Sua cadeia de suprimentos nas mãos de<br />
                    especialistas comprometidos em encontrar a <br />
                    solução mais inteligente e eficiente para sua <br />
                    carga, seja qual for o seu volume de operações.
                </p>


            </div>
            <div class="flex self-end-safe w-full">
                <x-btn-atendimento class="mb-12" />
            </div>
        </div>
</section>
