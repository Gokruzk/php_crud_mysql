<?php
include("../Config/conn.php");
$sql = "SELECT * FROM Alumnos";
$res = mysqli_query($conn, $sql);
?>