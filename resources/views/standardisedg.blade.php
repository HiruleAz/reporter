<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enviro";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from database
$sql = "SELECT scems, ssrm FROM entries WHERE gastype = 'NOx' AND sampleno IS NOT NULL";
$result = $conn->query($sql);

// Store data in variables
$scems = array();
$ssrm = array();
while($row = $result->fetch_assoc()) {
    $scems[] = $row['scems'];
    $ssrm[] = $row['ssrm'];
}

$maxValue = max(array_merge($scems, $ssrm)) + 100;
// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Line Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 80%; margin: auto;">
        <canvas id="lineChart"></canvas>
    </div>

    @push('scripts')
    <script>
        var ctx = document.getElementById('lineChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21],
                datasets: [{
                    label: 'CEMS',
                    data: <?php echo json_encode($scems); ?>,
                    borderColor: 'rgba(23, 73, 232, 0.8)', 
                    borderWidth: 2,
                    pointStyle: 'rectRot',
                    backgroundColour: 'FFFFFF',
                    fill: false
                },{
                    label: 'SRM',
                    data: <?php echo json_encode($ssrm); ?>,
                    borderColor: 'rgba(224, 13, 13, 0.8)',
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
                            max: <?php echo json_encode($maxValue); ?>
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