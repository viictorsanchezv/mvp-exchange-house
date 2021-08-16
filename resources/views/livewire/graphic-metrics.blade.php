<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.stock.min.js"></script>

<div class="flex flex-row flex-wrap flex-grow mt-2">

    <div class="w-full p-6">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h5 class="font-bold uppercase text-gray-600">Ganancias de la empresa de los ultimos 30 dias en USD</h5>
            </div>
            <div class="p-5">
                <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                @push('scripts')
                <script>
                    document.addEventListener('livewire:load', function () {
                        
                        new Chart(document.getElementById("chartjs-7"), {
                            "type": "bar",
                            "data": {
                                "labels": @this.days,
                                "datasets": [{
                                    "label": "Ganancias",
                                    "data": @this.profit,
                                    "borderColor": "rgb(255, 99, 132)",
                                    "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                }]
                            },
                            "options": {
                                "scales": {
                                    "yAxes": [{
                                        "ticks": {
                                            "beginAtZero": true
                                        }
                                    }]
                                }
                            }
                        });

                    });  
                </script>
            </div>
        </div>
        <!--/Graph Card-->
    </div>

    <div class="w-full p-6">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h5 class="font-bold uppercase text-gray-600">Transacciones por pais</h5>
            </div>
            <div class="p-5">
                <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                <script>

                    document.addEventListener('livewire:load', function () {
                        new Chart(document.getElementById("chartjs-0"), {
                            "type": "bar",
                            "data": {
                                "labels": @this.countries,
                                "datasets": [{
                                    "label": "Ganancias",
                                    "data": @this.profitCountry,
                                    "borderColor": "rgb(255, 99, 132)",
                                    "backgroundColor": "rgba(255, 99, 132, 0.2)",
                                }]
                            },
                            "options": {
                                "scales": {
                                    "yAxes": [{
                                        "ticks": {
                                            "beginAtZero": true
                                        }
                                    }]
                                }
                            }
                        });

                    });
                </script>
            </div>
        </div>
        <!--/Graph Card-->
    </div>

    <div class="w-full p-6">
        <!--Graph Card-->

        <div class="bg-white border-transparent rounded-lg shadow-xl mt-6">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h5 class="font-bold uppercase text-gray-600">Ganancias por rango de tiempo</h5>
            </div>
        </div>
        <div id="stockChartContainer" style="height: 600px; width: 100%;"></div>
    </div>
</div>

<script>
    document.addEventListener('livewire:load', function () {
        var dataPoints = [];

        var stockChart = new CanvasJS.StockChart("stockChartContainer",{
            theme: "light2",
            colorSet: "colorSet1",
            exportEnabled: false, //false
            width: 864,
            charts: [{
            axisX: {
                crosshair: {
                enabled: true
                }
            },
            axisY: {
                prefix: "$",
                title: "Ganancias",
                titleFontSize: 5
            },
            data: [{
                type: "area",
                xValueFormatString: "YYYY MM D",
                yValueFormatString: "$ ###.##",
                dataPoints : dataPoints
            }]
            }],
            navigator: {
            enabled: false,            
            }
        });
      
            for(var i = 0; i < @this.transaction_days.length; i++){
                console.log(@this.transaction_days[i].date);
                console.log(@this.transaction_days[i].sale);
                dataPoints.push({x: new Date(@this.transaction_days[i].date), y: Number(@this.transaction_days[i].sale)});
            }
            stockChart.render();
        
    });
</script>