<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Third Year Group Project" />
  <meta name="keywords" content="Heriot-Watt University, Group Project">
  <meta name="author" content="Stuart Baron, Sam Cochrane, Sabina Jedrzejczyk, Tomasz Mosak, Eileen Young ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title> Infini Bikes </title>
  <link rel="icon" href="resources/icon.png" type="image" />
  <link href="https://fonts.googleapis.com/css?family=Roboto|Ropa+Sans" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="linkfiles/generalstyle.css">
  <link rel="stylesheet" type="text/css" href="linkfiles/mapIndex.css">
  <link rel="stylesheet" type="text/css" href="linkfiles/mediaqueries.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title> Tyrnakine </title>
</head>

<body>

  <div id="background">
    <ul class="navbar" id="myNavbar" class="fade">
      <li> <a id="active" href="index.html"> Home </a> </li>
      <li> <a href="#"> About</a> </li>
      <li> <a href="#"> Bikes and Prices</a> </li>
      <li> <a href="#"> Contact Us</a> </li>
      
      <button id="button">Login</button>
      <button id="button">Sign Up</button>
      <li> <a href="javascript:void(0);" class="icon" onclick="responsiveNavbar()"> Menu &#9776; </a> </li>
    </ul>

    <div id="maindiv">
      <div id="map"></div>

      <!--### main website here ###-->

    </div>

    <div class="explanation">
      <div class="step1">
        <i class="fa fa-mouse-pointer"></i>
        <p id="text"> Register with us today to hire out a bike from anywhere in Edinburgh.</p>
      </div>

      <div class="step2">
        <i class="fa fa-qrcode"></i>
        <p id="text"> Get your QR code and scan it at the bike shelter to unlock your bike.</p>
      </div>

      <div class="step3">
        <i class="fa fa-bicycle"></i>
        <p id="text"> Hop on your bike and go go go!</p>
      </div>

      <div class="step4">
        <i class="fa fa-lock"></i>
        <p id="text"> Return your bike to any InfiniBikes shelter in the city,and scan your QR code to lock your bike
          in. </p>
      </div>
    </div>
  </div>

  <script src="linkfiles/generalscripts.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA8yJzHM3oqcPzjqEisLsP4GSkevvJk9s&callback=createMap"></script>

<?php
/*
Server: sql2.freemysqlhosting.net
Name: sql2277384
Username: sql2277384
Password: tE5%uI2*
Port number: 3306
*/

$dbServerName = "sql2.freemysqlhosting.net";
$dbUsername = "sql2277384";
$dbPassword = "tE5%uI2*";
$dbName = "sql2277384";

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
  echo '<script type="text/javascript">throwAlert("db connected");</script>';
}

$sql = "SELECT TableID, column1 FROM TestTable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "TableID: " . $row["TableID"]. " - Number: " . $row["column1"]. "<br>";
        echo '<script type="text/javascript">throwAlert('.$row["column1"].');</script>';
    }
} else {
  echo '<script type="text/javascript">throwAlert("0 results");</script>';
}
$conn->close();

?>


</body>

</html>
