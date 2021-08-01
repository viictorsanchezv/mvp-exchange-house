
<div class="mx-auto w-full bg-gray-100 h-screen" x-data="{ 'showModal': false }" @keydown.escape="showModal = false" x-cloak>
    <div class='flex w-full justify-end'>
        <button type="button" class="bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full" @click="showModal = true">Nueva transacción</button>
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
                                        Usuario
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Cliente envia
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Cliente recibe
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Monto envio
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Estatus
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Fecha
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            
                            
                            @foreach($transactions as $key=>$transaction)
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $transaction->user->name; }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $transaction->client->name; }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $transaction->client_receive->name; }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $transaction->money_sent; }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{ $transaction->statu->name }} 
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $transaction->date_end; }}
                                </td>
                                </tr>
                            @endforeach
                                <!-- More people... -->
                            </tbody>
                        </table>
                      
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
                        <div class="mt-4">
                            <x-jet-label for="client_emisor" value="{{ __('Cliente Emisor *') }}" />
                            <x-jet-input id="client_emisor" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="text" name="client_emisor"  required autofocus autocomplete="" wire:model="" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="country_send" value="{{ __('Pais de Emisión *') }}" />
                            <x-jet-input id="country_send" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="text" name="country_send"  required autofocus autocomplete="" wire:model="" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="email_client_send" value="{{ __('Correo electrónico Emisor *') }}" />
                            <x-jet-input id="email_client_send" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="email" name="email_client_send" required  wire:model=""/>
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="client_receiver" value="{{ __('Cliente Receptor *') }}" />
                            <x-jet-input id="client_receiver" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="text" name="client_receiver"  required autofocus autocomplete="" wire:model="" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="country_receiver" value="{{ __('Pais de Recepción *') }}" />
                            <x-jet-input id="country_receiver" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="text" name="country_receiver"  required autofocus autocomplete="" wire:model="" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="money_sent" value="{{ __('Montro transacción *') }}" />
                            <x-jet-input id="money_sent" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="number" name="money_sent"  required autofocus autocomplete="" wire:model="" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="shipping_rate" value="{{ __('Tasa transacción *') }}" />
                            <x-jet-input id="shipping_rate" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="number" name="shipping_rate"  required autofocus autocomplete="" wire:model="" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="date_end" value="{{ __('Fecha Estatus *') }}" />
                            <x-jet-input id="date_end" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="date" name="date_end"  required autofocus autocomplete="" wire:model="" />
                        </div>

                        <div class="flex items-center justify-end mt-8">
                            <button wire:click.prevent="store()" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-blueP-light text-base leading-6 font-bold text-blueP-DEFAULT shadow-sm hover:bg-blueP-DEFAULT focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Agregar
                            </button>
                        </div>
                    </form>

				<!--Footer-->
				<div class="flex justify-end pt-2">
					<button class="modal-close px-4 bg-blueP-dark p-2 rounded-lg text-white " @click="showModal = false">Cerrar</button>
				</div>


			</div>
			<!--/Dialog -->
		</div><!-- /Overlay -->

	</section>

</div>

