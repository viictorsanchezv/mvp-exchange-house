
<div class="mx-auto w-full bg-gray-100 h-screen" x-data="{ 'showModal': false }" @keydown.escape="showModal = false" x-cloak>
    <div class='flex w-full justify-end'>
        <button type="button" class="bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full" @click="showModal = true">Crear usuario</button>
    </div>  
    <div class='w-full mx-auto px-3'>  
        <div class="flex flex-col">
            <div class=" sm:-mx-6 lg:-mx-0">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-2">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Estatus
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Rol
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            
                            
                            @foreach($users as $key=>$user)
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                        {{ $user->name; }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                        {{ $user->email; }}
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $user->rol->name }}
                                </td>
                                </tr>
                            @endforeach
                                <!-- More people... -->
                            </tbody>
                        </table>
                      <!--  {{ $users->links() }} -->
                    </div>
                </div>
            </div>
        </div>
    </div>  

	<section class="flex flex-wrap p-4 h-12 items-center">
		<!--Overlay-->
		<div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal" :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
			<!--Dialog-->
			<div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModal" @click.away="showModal = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                  
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
                            <x-jet-label for="name" value="{{ __('Nombre *') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="text" name="name"  required autofocus autocomplete="name" wire:model="name" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="email" value="{{ __('Correo *') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="email" name="email" required  wire:model="email"/>
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="rol" value="{{ __('Rol de usuario *') }}" />
                            <x-jet-input id="rol" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="number" name="rol" required wire:model="rol"/>
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Contraseña *') }}"/>
                            <x-jet-input id="password" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="password" name="password" required autocomplete="new-password" wire:model="password" />
                        </div>


                        <div class="mt-4">
                            <x-jet-label for="password_confirmation" value="{{ __('Confirmación de contraseña *') }}" />
                            <x-jet-input id="password_confirmation" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="password" name="password_confirmation" wire:model="password_confirmation" required autocomplete="password_confirmation" />
                        </div>

                        <div class="flex items-center justify-end mt-8">
                            <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a> -->

                            <button wire:click.prevent="store()" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-blueP-light text-base leading-6 font-bold text-blueP-DEFAULT shadow-sm hover:bg-blueP-DEFAULT focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Registrar
                            </button>
                        </div>
                    </form>

				<!--Footer-->
				<div class="flex justify-end pt-2 mt-4">
					<button class="modal-close px-4 bg-blueP-dark p-2 rounded-lg text-white " @click="showModal = false">Cerrar</button>
				</div>


			</div>
			<!--/Dialog -->
		</div><!-- /Overlay -->

	</section>

</div>

