<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Control</title>
</head>
<style>
    input,button{
        height: 100px;
        width: 200px;
        font-size: 30px;
    }
    a{
        text-decoration: none;
    }
</style>
<?php 
    require 'connection.php';
?>

<body>
<form action="" method="post">
    <div class="container" style="text-align: center">
        <h1>Robot Control</h1>
        <br><br>
        <input type="button" onclick="onConnectUsb()" id="connect-usb" title="Connect Arduino" value="Connect Arduino" style="font-size: 25px">
        <br><br><br><br><br><br><br><br><br><br><br>
        <input type="submit" name="btn-dir" onclick="hi(id)" id="Forward" title="Forward" value="Forward"><br>
        <input type="submit" name="btn-dir" onclick="hi(id)" id="Left" title="Left" value="Left" style="margin: 50px">
        <input type="submit" name="btn-dir" onclick="hi(id)" id="Stop" title="Stop" value="Stop" style="margin: 50px">
        <input type="submit" name="btn-dir" onclick="hi(id)" id="Right" title="Right" value="Right" style="margin: 50px"><br>
        <input type="submit" name="btn-dir" onclick="hi(id)" id="Backward" title="Backward" value="Backward">
        <br><br><br><br><br><br><br>
        <button style="font-size: 25px"><a href="directions_log.php">Robot Directions Log</button>
    </div>
    </form>
</body>
<script src="script.js"></script>
</html>