<!DOCTYPE html>
<html lang="en">
<head>
    <title>Line Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 80%; margin: auto;">
        <canvas id="lineChart"></canvas>
        <h1>{{$}}</h1>
    </div>

    @foreach($entries as $entry)
  @if (is_null($entry->sampleno))
  <?php     
    $axi += 0;
    $ayi += 0;
    $xyi += 0;
    $xxi += 0;
    ?>
  @else 
  <?php     
    $axi += $entry->cemsmg;
    $ayi += $entry->srmmg;

    $count++;
    ?>
  @endif
    
@endforeach

    <script>
        var ctx = document.getElementById('lineChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21],
                datasets: [{
                    label: 'CEMS',
                    data: [0,0,0, 233.59, 243.36, 226.34, 248.42, 254.22, 257.08, 272.13, 344.45, 332.33, 316.97, 301.04, 301.21, 251.50, 257.09, 259.44, 260.96, 271.65, 239.68],
                    borderColor: 'rgba(224, 13, 13, 0.8)',
                    borderWidth: 2,
                    pointStyle: 'rectRot',
                    backgroundColour: 'FFFFFF',
                    fill: false
                },{
                    label: 'SRM',
                    data: [0.02,0.02,0.04, 240.01, 249.77, 229.16, 254.79, 260.55, 263.44, 275.45, 348.63, 336.34, 320.73, 304.59, 304.78, 255.33, 261.01, 263.33, 264.94, 275.70, 243.74],
                    borderColor: 'rgba(23, 73, 232, 0.8)',
                    borderWidth: 2,
                    backgroundColour: 'FFFFFF',
                    pointStyle: 'rectRot',
                    fill: false
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'PLOT 1: Time series of standardised CEM versus standardised SRM data',
                        padding: 30,
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
                            text: 'CEMS & SRM, mg/m3',
                            font: {
                                size: 15,
                                weight: 'bold'
                            },
                        },
                        beginAtZero: true,
                        ticks: {
                            min: 0, // minimum value
                            max: 500 // maximum value
                        }
                    },
                    x: {
                        title:{
                            display: true,
                            text: 'Sample Runs',
                            font: {
                                size: 15,
                                weight: 'bold'
                            },
                        },
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