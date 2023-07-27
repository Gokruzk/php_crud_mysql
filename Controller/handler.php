<?php
$value = $_GET['value'];
if ($value == 1) {
    include("../View/insert.html");
}else if($value == 2){
    include("../View/mostrar.php");
}else if($value == 3){
    include("../View/buscar.html");
}
?>