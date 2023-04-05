<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Select data
// $sql = "SELECT * FROM pizza ORDER BY id DESC LIMIT 1;";
$sql = "SELECT * FROM pizza ORDER BY id DESC LIMIT 1;";
// SELECT * FROM pizza ORDER BY id DESC LIMIT 1; 
// 이런식으로 가장 최근것만 출력하고 싶은데

// 데이터베이스에서 자동으로 insert 할때 글넘버를 메겨줄 수 있나
$result = $conn->query($sql);

// Convert result to JSON format
$data = array();
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}
$json_data = json_encode($data);

// Close connection
$conn->close();
?>


var jsonData = <?php echo $json_data; ?>;
<?php echo $json_data; ?>

<html>
    <head>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

      
        function drawChart() {

          var data = google.visualization.arrayToDataTable([
            ['Pizza', 'Value'],
            ['Pizza 1', <?php echo $data[0]['pizza1']?>],
            ['Pizza 2', <?php echo $data[0]['pizza2']?>],
            ['Pizza 3', <?php echo $data[0]['pizza3']?>],
            ['Pizza 4', <?php echo $data[0]['pizza4']?>],
            ['Pizza 5', <?php echo $data[0]['pizza5']?>]
          ]);

          var options = {
            title: 'My Daily Activities'
          };

          var chart = new google.visualization.PieChart(document.getElementById('piechart'));

          chart.draw(data, options);
        }
      </script>
    </head>
    <body>
      <div id="piechart" style="width: 900px; height: 500px;"></div>
    </body>
  </html>





