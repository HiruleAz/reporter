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
        <canvas id="standardChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('standardChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21],
                datasets: [{
                    label: 'Mean (CL)',
                    data: [0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1],
                    borderColor: 'rgba(224, 13, 13, 0.8)',
                    borderWidth: 3,
                    fill: false
                },{
                    label: 'UCL at 2 SD',
                    data: [1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,],
                    borderColor: 'rgba(23, 73, 232, 0.8)',
                    borderWidth: 3,
                    fill: false
                },{
                    label: 'LCL at 2 SD',
                    data: [-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,],
                    borderColor: 'rgba(23, 73, 232, 0.8)',
                    borderWidth: 3,
                    fill: false
                },{
                    label: 'Differences, Di',
                    data: [1, 1.5],
                    borderColor: 'rgba(23, 73, 232, 0.8)',
                    borderWidth: 3,
                    fill: false
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Outlier Determniation of CEMS & SRM Raw Data',
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
                        }
                    }
                },
                pointStyle: false,
                scales: {
                    y: {
                        beginAtZero: false,
                        min: -2.50,
                        max: 1.5,
                        ticks: {
                        stepSize: 0.5
                        }
                    },
                    x: {
                        x: 1
                    }
                }
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