<div
    {{ $attributes->merge([
        'class' =>
            'flex w-full md:w-md p-10 justify-center items-center bg-white rounded-full text-foreground hover:bg-white/90 h-12 ',
    ]) }}>
    <flux:modal.trigger name="atendimento">
        <button class="font-bold text-xl text-black cursor-pointer">
            Agende um atendimento personalizado
        </button>
    </flux:modal.trigger>
    <img class="w-5 h-5 ml-6" src="{{ Vite::asset('resources/svg/arrow-right.svg') }}" alt="">
    @once

        <flux:modal name="atendimento">
            <div class="flex flex-row">
                <div class="flex-1">
                    <div>
                        <h2 class="text-4xl tracking-wider leading-7 font-normal mb-4">Agende um atendimento personalizado
                        </h2>
                        <p class="text-xl leading-4">Nossa equipe está a sua disposição.<br />
                            Nossa filosofia é simples: <br />
                            foco em você.
                        </p>
                        <div class="w-10 h-px bg-black my-6"></div>
                    </div>
                    <div>
                        <p>Canais de atendimento direto:</p>

                        <div class="flex flex-col gap-2 font-semibold">
                            <div class="flex items-center gap-2">
                                <img src="{{ Vite::asset('resources/svg/phone.svg') }}" alt="" class="w-12 h-12">
                                <p>+55 11 2629-6065</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ Vite::asset('resources/svg/mail.svg') }}" alt="" class="w-12 h-12">
                                <p>atendimento@arthalog.com.br</p>
                            </div>
                            <a href="#"
                                class="flex items-center justify-between py-2.5 px-5 bg-chinese-silver rounded-full">
                                <img src="{{ Vite::asset('resources/svg/whatsapp.svg') }}" alt="" class="w-8 h-8">
                                Atendimento por WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <input label="Nome" placeholder="Seu nome" />
                    <input label="Email" placeholder="Seu email" />
                    <input label="Telefone" placeholder="Seu telefone" />
                </div>
            </div>
        </flux:modal>
    @endonce
</div>
