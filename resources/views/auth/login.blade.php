<x-guest-layout>
    <div class=" bg-main-image bg-no-repeat bg-center bg-cover w-full h-full min-h-screen flex flex-col sm:justify-center items-center">
        <div class="bg-black bg-opacity-25 py-8 px-12 rounded-xl w-1/3">

            <div class="w-full sm:max-w-md overflow-hidden sm:rounded-lg">
                <img src="{{ asset('images/tailwind-css-logo.svg') }}" class="h-20 mx-auto">
            </div>
            

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-input id="email" class="block mt-8 w-full px-2 font-normal text-sm h-8" type="email" name="email" placeholder="Correo electrónico" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-input id="password" class="block mt-8 w-full px-2 font-normal text-sm h-8" type="password" name="password" placeholder="Contraseña" required autocomplete="current-password" />
                </div>

                <div  class="flex items-center justify-center mt-4">
                    
                    <button class=" w-full text-center rounded-md mt-8 px-4 py-2 bg-blueP-dark text-white text-xs  uppercase  hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                    {{ __('Iniciar Sesión') }}
                    </button>
                </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-white hover:text-gray-100" href="{{ route('password.request') }}">
                            {{ __('Recuperar contraseña') }}
                        </a>
                    @endif

                   
                </div>
            </form>
        </div>
</div>
</x-guest-layout>
