<?php
$host = "localhost"; // 호스트 이름
$username = "root"; // 사용자 이름
$password = ""; // 비밀번호
$dbname = "pizza"; // 데이터베이스 이름

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
  die("MySQL 데이터베이스 연결 실패: " . mysqli_connect_error());
}

$sql = "SELECT * FROM piechart_data";
$result = $conn->query($sql);

<form method="post" action="insert.php">
  <label for="data1">Data 1:</label>
  <input type="text" name="data1" id="data1"><br>
  
  <label for="data2">Data 2:</label>
  <input type="text" name="data2" id="data2"><br>
  
  <label for="data3">Data 3:</label>
  <input type="text" name="data3" id="data3"><br>
  
  <label for="data4">Data 4:</label>
  <input type="text" name="data4" id="data4"><br>
  
  <label for="data5">Data 5:</label>
  <input type="text" name="data5" id="data5"><br>
  
  <input type="submit" value="Submit">
</form>

$data1 = $_POST['data1'];
$data2 = $_POST['data2'];
$data3 = $_POST['data3'];
$data4 = $_POST['data4'];
$data5 = $_POST['data5'];

$sql = "INSERT INTO table_name (data1, data2, data3, data4, data5) VALUES ('$data1', '$data2', '$data3', '$data4', '$data5')";

if (mysqli_query($conn, $sql))
  echo <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable();

        var options = {
          title: 'pizza'
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

$con->close();
?>

