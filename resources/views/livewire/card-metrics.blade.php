<div class="flex flex-wrap">
@foreach($metrics as $key=>$metric)
    <!--Metric Card-->
    <div class="w-full md:w-1/2 xl:w-1/2 p-6">
        <div class="bg-gradient-to-b from-blueP-light to-white border-b-4 border-blueP-dark rounded-lg shadow-xl p-5">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded-full p-5 bg-blueP-dark"><i class="fa {{  $metric['icon'] }} fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold uppercase text-gray-600">{{  $metric['name'] }}</h5>
                    <h3 class="font-bold text-3xl">{{  $metric['valueMetric'] }} </h3>
                </div>
            </div>
        </div>

    
    </div>  
    <!--/Metric Card-->
@endforeach
</div>

<div class="flex flex-wrap">
    <div class="w-full md:w-8/12 xl:w-8/12 p-6">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Dinero enviado
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                
                
                @foreach($transactions as $key=>$transaction)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $transaction->money_sent; }} $
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $transaction->statu->name; }}
                        </td>
                    </tr>
                @endforeach
                    <!-- More people... -->
                </tbody>
            </table>
        </div>
    </div>
</div>
