
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif


        <form>
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full border-1" type="text" name="name"  required autofocus autocomplete="name" wire:model="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Correo') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" required  wire:model="email"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="rol" value="{{ __('Rol de usuario') }}" />
                <x-jet-input id="rol" class="block mt-1 w-full" type="number" name="rol" required wire:model="rol"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" wire:model="password" />
            </div>


            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmación de contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" wire:model="password_confirmation" required autocomplete="password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> -->

                <button wire:click.prevent="store()" type="button"
                    class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    Registrar
                </button>
            </div>
        </form>
    </x-jet-authentication-card>
