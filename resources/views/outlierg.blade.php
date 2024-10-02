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
$arraydi = array();

foreach ($entries as $entry) {
    if (!is_null($entry->sampleno) && $entry->sampleno > 3) {
        $mdi_values[] = $entry->srmmg - $entry->cemsmg;
    }
}

while($row = $result->fetch_assoc()) {
    $scems[] = $row['scems'];
    $ssrm[] = $row['ssrm'];
}

$maxValue = max(array_merge($scems, $ssrm)) + 100;
// Close database connection
$conn->close();
?>

<?php 
    $mxi = 0;
    $myi = 0; 
    $mdi = 0; 
    $count = 0;
    $ss = 0;
    $var = 0;
    $sd = 1;
    $ucl = 0;
    $lcl = 0;

  ?>

  @foreach($entries as $entry)
        @if (is_null($entry->sampleno) || $entry->sampleno === 1 || $entry->sampleno === 2 || $entry->sampleno === 3)
          <?php $mxi += 0 ?>
          <?php $myi += 0 ?>
          <?php $mdi += 0 ?>
        @else
          <?php 
          $mxi += $entry->cemsmg;
          ?>
          <?php $myi += $entry->srmmg ?>
          <?php $mdi += ($entry->srmmg - $entry->cemsmg) ?>
          <?php $count += 1;?>
          
        @endif
  @endforeach

  <?php 

  $mxi /= 18;
  $mxi = round($mxi, 2); 

  $myi /= 18;
  $myi = round($myi, 2); 
  
  ?>

  @foreach($entries as $entry)
      <?php $calc = 0?>
      @if (is_null($entry->sampleno) || $entry->sampleno === 1 || $entry->sampleno === 2 || $entry->sampleno === 3)
          <?php $calc -= 0 ?>
        @else
          <?php 
            $calc = (($entry->srmmg - $entry->cemsmg) - $mdi);
            $calc *= $calc; 
            $ss += $calc;
          ?>
        @endif
  @endforeach

  <?php 
      $var = $ss / ($count - 1);
      $sd = sqrt($var);

      $ucl = $mdi + (2 * (2 * $sd));
      echo $ucl;
      $lcl = $mdi - (2 * (2 * $sd));
      echo $lcl;
  ?>

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
                labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18],
                datasets: [{
                    label: 'Mean (CL)',
                    data: [
                        <?php 
                            for ($i = 0; $i < 18; $i++) {
                                echo $mdi;
                            if ($i < 17) {
                                echo ",";
                            }}
                        ?>
                    ],
                    borderColor: 'rgba(23, 73, 232, 0.8)',
                    borderWidth: 3,
                    pointStyle: false,
                    fill: false
                },{
                    label: 'UCL at 2 SD',
                    data: [
                        <?php 
                            for ($i = 0; $i < 18; $i++) {
                                echo $ucl;
                            if ($i < 17) {
                                echo ",";
                            }}
                        ?>
                    ],
                    borderColor: 'rgba(224, 13, 13, 0.8)',
                    borderWidth: 3,
                    pointStyle: false,
                    fill: false
                },{
                    label: 'LCL at 2 SD',
                    data: [
                        <?php 
                            for ($i = 0; $i < 18; $i++) {
                                echo $lcl;
                            if ($i < 17) {
                                echo ",";
                            }}
                        ?>
                    ],
                    borderColor: 'rgb(135, 140, 140)',
                    borderWidth: 3,
                    pointStyle: false,
                    fill: false
                },{
                    label: 'Differences, Di',
                    data: [<?php 
                        foreach ($mdi_values as $mdi_value) {
                            echo $mdi_value;
                            echo ",";
                        }
                    ?>],
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
                        min: <?php echo round($lcl - 1); ?>,
                        max: <?php echo round(($ucl + 1)); ?>,
                        ticks: {
                        stepSize: 1
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