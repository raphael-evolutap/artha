<div>
    <flux:modal.trigger name="atendimento" class="cursor-pointer">
        <div
            class='flex w-full md:w-md p-10 justify-center items-center bg-white rounded-full text-foreground hover:bg-white/90 h-12 {{ $style }}'>
            <button class="font-bold text-xl text-black cursor-pointer">
                Agende um atendimento personalizado
            </button>
            <img class="w-5 h-5 ml-6" src="{{ Vite::asset('resources/svg/arrow-right.svg') }}" alt="">
        </div>
    </flux:modal.trigger>
    @once
        <flux:modal @close="resetForm" :closable="false" name="atendimento" @class([
            '[&::backdrop]:bg-white/70!  max-w-6xl!',
            'w-4xl' => !$mail_sent,
        ])>
            @if ($mail_sent)
                <div class="p-12 text-center ">
                    <flux:modal.close name="atendimento">
                        <div>
                            <img class="w-6 h-6" src="{{ Vite::asset('resources/svg/close-black.svg') }}" alt="Fechar">
                        </div>
                    </flux:modal.close>
                    <h3 class="text-5xl font-bold mb-4 tracking-wider">Tudo certo!</h3>
                    <p class="text-3xl font-normal tracking-wider leading-8">Suas informações<br /> foram recebidas.<br />
                        Em breve um especialista <br /> entrará em contato.<br />
                        para agendar seu call.</p>
                    <flux:modal.close name="atendimento">
                        <div class="flex justify-center ">
                            <button
                                class="mt-4 text-xl font-semibold bg-black text-white py-4 px-8 rounded-full mt-4 flex items-center justify-center self-center cursor-pointer">
                                Voltar ao site
                                <img class="w-5 h-5 ml-6" src="{{ Vite::asset('resources/svg/arrow-right.svg') }}"
                                    alt="">
                            </button>
                        </div>
                    </flux:modal.close>
                </div>
            @else
                <div class="flex flex-row p-12">
                    <div class="flex-1 ">
                        <div>
                            <h2 class="text-5xl tracking-widest leading-10 font-normal mb-4">Agende um atendimento
                                personalizado
                            </h2>
                            <p class="text-xl leading-4">Nossa equipe está a sua disposição.<br />
                                Nossa filosofia é simples: <br />
                                foco em você.
                            </p>
                            <div class="w-10 h-0.5 bg-black my-6"></div>
                        </div>
                        <div>
                            <p class="mb-4">Canais de atendimento direto:</p>

                            <div class="flex flex-col gap-2 font-semibold">
                                <div class="flex items-center gap-2">
                                    <img src="{{ Vite::asset('resources/svg/phone.svg') }}" alt=""
                                        class="w-10 h-10">
                                    <p>+55 11 2629-6065</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="{{ Vite::asset('resources/svg/mail.svg') }}" alt="" class="w-10 h-10">
                                    <p>atendimento@arthalog.com.br</p>
                                </div>
                                <a href="#"
                                    class="max-w-4/5 flex items-center gap-2 py-2.5 px-3 bg-chinese-silver rounded-full">
                                    <img src="{{ Vite::asset('resources/svg/whatsapp.svg') }}" alt=""
                                        class="w-6 h-6">
                                    Atendimento por WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 ">
                        <form wire:submit.prevent="submit">
                            <div class="mb-2">
                                <label class="block text-base font-normal" for="nome">Nome</label>
                                <input wire:model="nome" class="block border-b border-black outline-none w-full" />
                            </div>
                            <div class="mb-2">
                                <label class="block text-base font-normal" for="sobrenome">Sobrenome</label>
                                <input wire:model="sobrenome" class="block border-b border-black outline-none w-full" />
                            </div>
                            <div class="mb-2">
                                <label class="block text-base font-normal" for="empresa">Empresa</label>
                                <input wire:model="empresa" class="block border-b border-black outline-none      w-full" />
                            </div>
                            <div class="mb-2">
                                <label class="block text-base font-normal" for="cidade_estado">Cidade/Estado</label>
                                <input wire:model="cidade_estado" class="block border-b border-black outline-none w-full" />
                            </div>
                            <div class="mb-2">
                                <label class="block text-base font-normal" for="whatsapp">WhatsApp</label>
                                <input wire:model="whatsapp" class="block border-b border-black outline-none w-full" />
                            </div>
                            <div class="mb-2">
                                <label class="block text-base font-normal" for="email">Seu melhor email</label>
                                <input wire:model="email" class="block border-b border-black outline-none w-full" />
                            </div>
                            <button wire:loading.attr="disabled" type="submit"
                                class="w-full text-xl font-semibold bg-black text-white py-4 px-5 rounded-full mt-4 cursor-pointer">Solicitar
                                atendimento
                                personalizado
                                <flux:icon.loading wire:loading />
                            </button>
                        </form>
                    </div>
                </div>
            @endif
        </flux:modal>
    @endonce
</div>
