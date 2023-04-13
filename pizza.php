<!DOCTYPE html>
  <html>
    <head> <meta charset="UTF-8">
        <title> pizza </title>
    </head>
    <body>

    <h1>피자 재료</h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="양파">양파:</label>
    <input type="text" id="양파" name="양파"><br><br>

    <label for="감자">감자:</label>
    <input type="text" id="감자" name="감자"><br><br>

    <label for="고구마">고구마:</label>
    <input type="text" id="고구마" name="고구마"><br><br>

    <label for="치즈">치즈:</label>
    <input type="text" id="치즈" name="치즈"><br><br>

   <input type="submit" value="Submit">
  </form> 

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizza";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  

  // SQL 쿼리를 생성합니다.
  $sql = "INSERT INTO pizza_ingredients (name, quantity)
  VALUES ('$name', $quantity)";

  if ($conn->query($sql) === TRUE) {
    echo "새로운 재료가 추가되었습니다.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
  </body>
</html>