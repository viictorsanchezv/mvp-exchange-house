<x-app-layout>
    @livewireScripts
    <div class="">
        <div class="flex mt-5 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto"
                            src="{{ asset('images/tailwind-css-logo.svg') }}"
                            alt="">
                    </div>
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $transaction->user->name; }}</h1>
                    <h3 class="text-gray-600 font-lg text-semibold leading-6">Detalles de la transacción</h3>
                    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Aquí puedes observar los detalles
                        de tu transaccion y editarla de ser necesario.
                    </p>
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Estatus</span>
                            <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{ $transaction->statu->name; }} </span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Fecha de entrega</span>
                            <span class="ml-auto"><span
                                    class="bg-gray-200 py-1 px-2 rounded text-black text-sm">{{ $transaction->date_end; }} </span></span>
                        </li>
                    </ul>
                </div>    
            </div>

            <x-jet-validation-errors class="mb-4" />
            <div class="w-full md:w-9/12 mx-2 h-64">
                    <!-- Profile tab -->
                    <!-- About Section -->
                    <div class="bg-white p-3 shadow-sm rounded-sm">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                            <span clas="text-green-500">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <span class="tracking-wide">Detalles</span>
                        </div>
                        <form action='/update-transaction' method='GET'>
                            @csrf
                            <div class="text-gray-700">
                                <div class="grid md:grid-cols-2 text-sm">
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Cliente Envía</div>
                                        <div class="px-4 py-2">{{ $transaction->client->name; }}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Cliente Recibe</div>
                                        <div class="px-4 py-2">{{ $transaction->client_receive->name; }}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Importe Transferencia</div>
                                        <div class="px-4 py-2"> {{ $transaction->money_sent; }} $ USD </div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Tarifa de la transferencia</div>
                                        <div class="px-4 py-2"> {{ $transaction->money_sent*$profit_percentage; }} $ USD </div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold"> Tasa del cambio de moneda (Dolar USD a Peso COP)</div>
                                        <div class="px-4 py-2"> {{ $transaction->shipping_rate; }} COP </div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold"> Monto a recibir en Venezuela</div>
                                        <div class="px-4 py-2"> {{ ($transaction->shipping_rate*$transaction->money_sent) }} COP </div>
                                    </div>


                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold"> Total de la transferencia</div>
                                        <div class="px-4 py-2"> {{ ($transaction->money_sent)+($transaction->money_sent*$profit_percentage) }} USD </div>
                                    </div>

                                    
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Fecha a entregar el dinero</div>
                                        <div class="px-4 py-2"> 
                                            <x-jet-input id="date_end" class="block mt-1 w-full px-2 font-normal text-sm h-8 border-2 border-black" type="date" name="date_end" wire:model="date_end" />       
                                        </div>
                                    </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Estatus</div>
                                            <div class="px-4 py-2">
                                                <select id="status"  name="status" wire:model="status" class="border shadow p-2 bg-white w-full">
                                                    <option value=''>Selecciona un estatus</option>
                                                @foreach($status as $statu)
                                                    <option value='{{ $statu->id }}'>{{ $statu->name }}</option>
                                                @endforeach
                                                </select>   
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">
                                    <a href="/dashboard">
                                        <button type='button'
                                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-blueP-light text-base leading-6 font-bold text-blueP-DEFAULT shadow-sm hover:bg-blueP-DEFAULT focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                        Regresar</button>

                                    </a>
                                </div>
                                <div class="px-4 py-2 font-semibold">
                                    <x-jet-input value='{{ $transaction->id }}' id="id" type="hidden" name="id" />    
                                    <button type="submit"
                                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-gray-800 text-base leading-6 font-bold text-white P-DEFAULT shadow-sm hover:bg-blueP-DEFAULT focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                        Actualizar
                                    </button>
                                </div>
                            </div>
                        </form>    
                    </div>
                </div>    
            </div>
    </div>


</x-app-layout>