<!-- <!DOCTYPE html>
<html lang="en">
<head>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <title>Bar Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 80%; margin: auto;">
        <canvas id="barChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($data['labels']),
                datasets: [{
                    label: 'Data',
                    data: @json($data['data']),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Line Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 80%; margin: auto;">
        <canvas id="calibrateChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('calibrateChart').getContext('2d');
        // var xyValues = {
        //     {

        //     }
        // }

        var myChart = new Chart(ctx, {
            type: 'scatter',
            data: {
                labels: [0, 0, 0, 181.67, 192.79, 203.73, 208.66, 213.85, 223.96, 277.76, 269.23, 263.59, 252.95, 250.26, 207.35, 209.19, 215.68, 212.57, 226.57, 175.77],
                datasets: [{
                    label: 'Linear (CEMS vs SRM)',
                    data: [0, 0, 0, 181.87, 192.96, 203.91, 208.84, 214.04, 224.16, 278.01, 269.46, 263.82, 253.17, 250.48, 207.53, 209.37, 215.87, 212.75, 226.77, 175.93],
                    borderColor: 'rgba(23, 73, 232, 0.8)',
                    borderWidth: 3,
                    pointStyle: 'rectRot',
                    backgroundColor: '#9BD0F5',
                    pointRadius: 5,
                    fill: false,
                    showLine: true
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'CALIBRATION FUNCTION & REGRESSION OF THE CALIBRATION FUNCTION',
                        font: {
                                size: 18,
                                weight: 'bold'
                        }
                    },
                    legend: {
                        position: 'bottom',
                        labels: {
                            display: true,
                            position: 'bottom',
                            padding: 30
                        },
                    }
                },
                scales: {
                    y: {
                        title:{
                            display: true,
                            text: 'Y, SRM in mg/m3',
                            font: {
                                size: 15,
                                weight: 'bold'
                            },
                        },
                        beginAtZero: false,
                        min: 0,
                        max: 300.00,
                        ticks: {
                        stepSize: 50.00
                        }
                    },
                    x: {
                        title:{
                            display: true,
                            text: 'X, CEMS in mg/m3',
                            font: {
                                size: 15,
                                weight: 'bold'
                            }
                        },
                        beginAtZero: true,
                        min: 0,
                        max: 300.00,
                        ticks: {
                        stepSize: 50.00
                        }
                        
                    }
                },
                
            }
        });
    </script>
</body>
</html>

<!-- https://www.koolreport.com/examples/reports/google_charts/line_chart/
https://www.koolreport.com/getting-started
https://icehouse-ventures.github.io/laravel-chartjs/
https://startutorial.com/view/how-to-use-chartjs-in-laravel
-->