<div class="flex flex-row flex-wrap flex-grow mt-2">

    <div class="w-full p-6">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h5 class="font-bold uppercase text-gray-600">Ganancias de la empresa de los ultimos 30 dias</h5>
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
                    new Chart(document.getElementById("chartjs-0"), {
                        "type": "bar",
                        "data": {
                            "labels": ["January", "February", "March", "April", "May", "June", "July"],
                            "datasets": [{
                                "data": [65, 59, 80, 81, 56, 55, 40],
                                "fill": false,
                                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                                "borderWidth": 1
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
                </script>
            </div>
        </div>
        <!--/Graph Card-->
    </div>

    <div class="w-full p-6">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h5 class="font-bold uppercase text-gray-600">Ganancias por rango de tiempo</h5>
            </div>
            <div class="p-5">
                <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                <script>
                    new Chart(document.getElementById("chartjs-1"), {
                        "type": "bar",
                        "data": {
                            "labels": ["January", "February", "March", "April", "May", "June", "July"],
                            "datasets": [{
                                "data": [65, 59, 80, 81, 56, 55, 40],
                                "fill": false,
                                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                                "borderWidth": 1
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
                </script>
            </div>
        </div>
        <!--/Graph Card-->
    </div>
</div>