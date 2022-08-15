<!DOCTYPE html>
<html>
<head>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    table{
        width: 100%;
    }
    a{
        text-decoration: none;
    }
    button,input{
        height: 100px;
        width: 200px;
        font-size: 30px;
    }
</style>
</head>
<body>
    <div class="container" style="text-align: center">
    
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "directions";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT robot_directions, movement_time FROM dir";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        echo "<table><tr><th>Robot Directions</th><th>Time</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["robot_directions"]."</td><td>" . $row["movement_time"]."</tr>";
        }
        echo "</table>";
        } else {
        echo "0 results";
        }
        $conn->close();
        ?>
        <br><br>
        <button style="font-size: 25px"><a href="controlArm.php">Control Arm</button>
    </div>
    </body>
</html>