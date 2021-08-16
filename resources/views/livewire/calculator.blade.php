<div class =" mx-3 my-3 bg-purple-50 px-3 py-3"> 
<div class="bg-gray-100 ">
    <div class="w-full text-white bg-main-color pt-2">
    <!-- End of Navbar -->
        <div class="container mx-auto  my-2 px-5">
            <div class="md:flex no-wrap md:-mx-2 ">
                <!-- Left Side -->
                <div class="w-full md:w-7/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white p-1 ">
                        <!-- component -->
                        <div class="container mx-auto">
                            <div class="inputs w-full max-w-2xl p-1 mx-auto">
                                <h2 class="text-xl font-bold text-gray-900">Calculadora de Montos</h2>
                                <form class="mt-2 border-t border-gray-400 pt-2">
                                    <div class='flex flex-wrap -mx-3 mb-2'>
                                        <div class='w-full md:w-full px-3 mb-2'>
                                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Selecciona el pais de destino</label>
                                            <div class="flex-shrink w-full inline-block relative">
                                                <select class="block appearance-none w-full  text-gray-900 rounded-none bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                                <option value=''>Selecciona un pais</option>
                                                    @foreach($countries as $country)
                                                        <option value='{{ $country->id }}'>{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                 <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                                </div>
                                                
                                            </div>
                                        </div>  

                                        
                                        <div class="personal w-full pt-2">
                                            <div class="flex items-center justify-between mt-1">
                                                <div class='w-full md:w-2/2 px-3 mb-6'>
                                                    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >Monto a Enviar</label>
                                                    <div class="mt-1 relative rounded-md shadow-sm">
                                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                            <span class="text-gray-500 sm:text-sm">
                                                                $
                                                            </span>
                                                        </div>
                                                        <input type="number" name="inQuantity" id="inQuantity"  placeholder="0.00" required name="price" min="0"  step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$"
                                                         onblur="this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'" class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-none py-3 px-6 leading-tight focus:outline-none  focus:border-gray-500" placeholder="0.00">
                                                        <div class="absolute inset-y-0 right-0 flex items-center">
                                                            <label for="currency" class="sr-only">Currency</label>
                                                            <select id="currency" name="currency" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                                                <option>USD</option>
                                                                <option>COP</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='w-full md:w-2/2 px-3 mb-6'>
                                                    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >Monto a Recibir</label>
                                                    <div class="mt-1 relative rounded-md shadow-sm">
                                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                            <span class="text-gray-500 sm:text-sm">
                                                                $
                                                            </span>
                                                        </div>
                                                        <input type="number" name="outQuantity" id="outQuantity" class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-none py-3 px-6 leading-tight focus:outline-none  focus:border-gray-500" placeholder="0.00">
                                                        <div class="absolute inset-y-0 right-0 flex items-center">
                                                            <label for="currency" class="sr-only">Currency</label>
                                                            <select id="currency" name="currency" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                                                <option>COP</option>
                                                                <option>USD</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                          
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End of profile card -->
                    <div class="my-4"></div>
                </div>
                <!-- Right Side -->
                <div class="w-full md:w-5/12 mx-2 h-full ">
                    <!-- Profile tab -->
                    <!-- About Section -->
                    <div class="bg-blue-100 p-3 shadow-sm rounded-sm">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                            <span class="tracking-wide">Tu Resumen</span>
                        </div>
                        <div class="container">
                            <div class="mt-1">
                                <div class="w-2/2 mx-auto bg-blue-100 rounded-none">
                                <!-- first -->
                                <div class="flex flex-col">
                                    <h6 class="text-gray-600 font-medium border-b border-gray-500 mx-1 px-1 my-4">Tipo de cambio</h6>
                                    <div class="flex flex-col text-gray-600 text-base font-bold justify-center items-center border-b border-gray-500 mx-1 px-1 my-0 "><span>1.00 USD = 3,709.36 COP</span></div>
                                    <div
                                    class="flex justify-between items-center w-full  " >
                                        <p class="text-gray-400 ml-4  overflow-clip">Monto de la Transferencia</p>
                                        <p id="transfMont"  class="text-gray-900 "></p>
                                    </div>
                                    <div class=" flex justify-between items-center w-full  ">
                                        <p class="text-gray-400 ml-4 overflow-clip">Cargo de la Transferencia</p>
                                        <p id = "transfCost" class="text-gray-900"></p>
                                    </div>

                                    <div class=" flex justify-between items-center w-full   border-b border-gray-500 mx-1 px-1 my-0">
                                        <p class="text-gray-400 ml-4 overflow-clip ">Total de la Transferencia</p>
                                        <p id= "transfTotal" class="text-gray-900 "></p>
                                    </div>
                                   
                                    <div
                                    class="flex justify-between items-center w-full">
                                    <p class="text-gray-400 ml-4">Total para el Destinatario</p>
                                    <p id="transfTotalDest"class="text-gray-900"></p>
                                    </div>
                                <!-- end -->
                                </div>
                            </div>
                            </div>
                       
                    </div>
                    <!-- End of about section -->
                    
                    <div class="my-4"></div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

@section('script')
<script>
    $(document).ready(function(){

        $("#inQuantity").change(function () {
            var value = $(this).val();
            var cambio = value*3709.36;
            var commision =parseFloat(value*7/100) ;
            var total = parseFloat(value) + parseFloat(commision);
            $("#outQuantity").val(cambio);
            $("#transfMont").empty();
            $("#transfMont").prepend("$ ");
            $("#transfMont").append(value);
            $("#transfMont").append(" USD");
            $("#transfCost").empty();
            $("#transfCost").prepend("$ ");
            $("#transfCost").append(commision);
            $("#transfCost").append(" USD");
            $("#transfTotal").empty();
            $("#transfTotal").prepend("$ ");
            $("#transfTotal").append(total);
            $("#transfTotal").append(" USD");
            $("#transfTotalDest").empty();
            $("#transfTotalDest").prepend("$ ");
            $("#transfTotalDest").append(cambio);
            $("#transfTotalDest").append(" COP");
           
        });

      


    });
</script>
@endsection