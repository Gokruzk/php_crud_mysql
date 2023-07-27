<?php
include("../Config/conn.php");
$name = $_POST['name'];
$notaE = $_POST["notaE"];
$notaR = $_POST["notaR"];
$sql = "INSERT INTO Alumnos(NombreEstu, Nota_Estu, NotaRedond) VALUES('$name',$notaE,$notaR)";
$res = mysqli_query($conn, $sql);
if ($res) {
    ?>
    <script>
        alert("Alumno agregado correctamente")
    </script>
    <?php
    include("../View/insert.html");
}else{
    ?>
    <script>
        alert("Error")
    </script>
    <?php
    include("../View/insert.html");
}
?>