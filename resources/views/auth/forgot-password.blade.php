<x-guest-layout>
    <div class=" bg-password-image bg-no-repeat bg-center bg-cover w-full h-full min-h-screen flex flex-col sm:justify-center items-center">
        <div class="bg-black bg-opacity-25 py-8 px-12 rounded-xl w-1/3">    
            <div class="w-full sm:max-w-md overflow-hidden sm:rounded-lg">
                <img src="{{ asset('images/tailwind-css-logo.svg') }}" class="h-20 mx-auto">
            </div>

            <div class="mb-4 text-sm text-white">
                {{ __('¿Ha olvidado su contraseña? No hay problema. Sólo tienes que indicarnos tu dirección de correo electrónico y te enviaremos un enlace para restablecer la contraseña que te permitirá elegir una nueva.') }}
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="block">
                    <x-jet-input id="email" class="block mt-8 w-full px-2 font-normal text-sm h-8" type="email" placeholder="Correo electrónico" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button>
                        {{ __('Enviar enlace') }}
                    </x-jet-button>
                </div>

                <a href="{{ route('login') }}" class="text-sm text-white underline">Regresar</a>
            </form>
        </div>
    </div>
</x-guest-layout>
