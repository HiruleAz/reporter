<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="/JavaScript/culjo.js" defer></script>
<!-- <script src="https://cdn.tailwindcss.com"></script>  -->
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="sidenav">
        <button class="add">Add new ID</button>
        <button class="edit">Edit current ID</button>
        <button class="delete">Delete current ID</button>
    </div>

    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'raw')">Show Table</button>
        <button class="tablinks" onclick="openTab(event, 'Graph')">Show Graph</button>
    </div>

    <center>
    <select name="type" id="type">
        <option value="raw">Raw</option>
        <option value="standard">Standardised</option>
        <option value="outlier">Outlier</option>
        <option value="calibrate">Calibration</option>
    </select>

    <select name="pollutant" id="pollutant">
        <option value="nox">NOx</option>
        <option value="co">CO</option>
        <option value="so2">SO2</option>
    </select>
    </center>

    <div id="raw" class="tabcontent">
        <h3>Show Data Table</h3>
        <table>
            <tr>
                <th>Sample</th>
                <th>test</th>
                <th>check</th>
            </tr>
            <tr>
              <th><input id="inputOne" placeholder="Value" type="text"></th>
              <th><input id="inputTwo" placeholder="Value" type="text"></th>
              <th><input id="result" type="number"></th>
          </tr>
        </table>
      </div>

      <div id="standard" class="tabcontent">
        <h3>Show Data Table</h3>
        <table>
            <tr>
                <th>Sample</th>
                <th>test</th>
                <th>check</th>
            </tr>
            <tr>
              <th><input id="inputOne" placeholder="Value" type="text"></th>
              <th><input id="inputTwo" placeholder="Value" type="text"></th>
              <th><input id="result" type="number"></th>
          </tr>
        </table>
      </div>
      
      <div id="Graph" class="tabcontent">
        <h3>Show Graph</h3>
        <p>Paris is the capital of France.</p> 
        <canvas id="myChart"></canvas>
      </div>

    <script>
        function openTab(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
    </script>
    
    <script>
        const xValues = [];
        const yValues = [];
        generateData("x * 2 + 7", 0, 10, 0.5);
        
        new Chart("myChart", {
          type: "line",
          data: {
            labels: xValues,
            datasets: [{
              fill: false,
              pointRadius: 1,
              borderColor: "rgba(255,0,0,0.5)",
              data: yValues
            }]
          },    
          options: {
            legend: {display: false},
            title: {
              display: true,
              text: "Graph of Something",
              fontSize: 16
            }
          }
        });
        function generateData(value, i1, i2, step = 1) {
          for (let x = i1; x <= i2; x += step) {
            yValues.push(eval(value));
            xValues.push(x);
          }
        }
        </script>

</body>