<?php
$server = 'mysql://root:PSpV8QRXMggrhI9rsfg5@containers-us-west-126.railway.app:5766/railway';
$user = 'root';
$psw = 'PSpV8QRXMggrhI9rsfg5';
$db = 'railway';
$port = '5766';
// $conn = mysqli_connect($server, $user, $psw, $db);
$conn = mysqli_connect($server, $user, $psw, $db, $port);
?>