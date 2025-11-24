<footer class="section-dark py-16 md:py-24">
    <div class="container max-w-6xl px-6 md:px-12 lg:px-20">
        <div class="grid md:grid-cols-2 gap-12 items-center mb-12">

            <div>
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" class="w-70">
            </div>

            <div class="flex justify-end">
                <livewire:contact-form />
            </div>
        </div>

        <div class="pt-12 ">
            <div class="flex flex-col md:flex-row justify-between gap-6">
                <div>
                    <p class="text-white text-lg">
                        Endereço
                    </p>
                    <p class="text-chinese-silver text-base">
                        Av. João XXIII, 350 - 7º Andar - Sala 77 - Socorro<br />
                        CEP 08780-830 <br />
                        Mogi das Cruzes - SP
                    </p>
                </div>
                <div>
                    <p class="text-white text-lg">
                        Atendimento
                    </p>
                    <p class="text-chinese-silver text-base">
                        +55 11 2629-6065 <br />
                        atendimento@arthalog.com.br <br />
                        09:00 as 18:00, seg a sex.
                    </p>
                </div>

                <div class="flex gap-4 justify-center">
                    <a href="#" class="" aria-label="Facebook">
                        <x-icon name="icon-linkedin-outlined" class="w-10 h-10 " />
                    </a>
                    <a href="#" class="" aria-label="Facebook">
                        <x-icon name="icon-instagram-outlined" class="w-10 h-10 " />
                    </a>
                    <a href="#" class="" aria-label="Facebook">
                        <x-icon name="icon-whatsapp-outlined" class="w-10 h-10 " />
                    </a>
                    <a href="#" class="" aria-label="Facebook">
                        <x-icon name="icon-phone-outlined"
                            class="w-10 h-10 text-white/60 hover:text-primary transition-colors" />
                    </a>
                    <a href="#" class="" aria-label="Facebook">
                        <x-icon name="icon-mail-outlined"
                            class="w-10 h-10 text-white/60 hover:text-primary transition-colors" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-12">
        <p class="text-granite-gray text-sm text-right">© {{ date('Y') }} ARTHA LOG - Todos os direitos reservados.
            Criado por
            EstudioJOB©{{ date('Y') }}</p>
    </div>
</footer>
