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
                labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,],
                datasets: [{
                    label: 'Mean (CL)',
                    data: [0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,0.1,],
                    borderColor: 'rgba(23, 73, 232, 0.8)',
                    borderWidth: 3,
                    pointStyle: false,
                    fill: false
                },{
                    label: 'UCL at 2 SD',
                    data: [1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,1.3,],
                    borderColor: 'rgba(224, 13, 13, 0.8)',
                    borderWidth: 3,
                    pointStyle: false,
                    fill: false
                },{
                    label: 'LCL at 2 SD',
                    data: [-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,-1.00,],
                    borderColor: 'rgb(135, 140, 140)',
                    borderWidth: 3,
                    pointStyle: false,
                    fill: false
                },{
                    label: 'Differences, Di',
                    data: [0.2, 0.25, -2.1, 0.25, 0.25, 0.25, 0.25, 0.25, 0.25, 0.25, 0.25, 0.25, 0.25, 0.25, 0.25, 0.25, 0.25, 0.25, ],
                    borderColor: 'rgba(254, 226, 42)',
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
                            padding: 50
                        }
                    }
                },
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
                        beginAtZero: true,
                        
                    }
                },
                legend: {
                    display: true,
                    position: 'bottom'
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