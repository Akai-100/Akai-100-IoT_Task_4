
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directions";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // use exec() because no results are returned
  if (isset($_POST["btn-dir"])) {
    $dir = $_POST["btn-dir"];
    date_default_timezone_set('Asia/Riyadh');
    $time = date('Y-m-d h:i:s');
    $sql = "INSERT INTO dir (robot_directions,movement_time)
    VALUES ('$dir','$time')";
    $conn->exec($sql);
  }
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>