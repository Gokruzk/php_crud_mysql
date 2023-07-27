<?php
include("../Config/conn.php");
$name = $_POST['name'];
$sql = "SELECT * FROM Alumnos WHERE NombreEstu = '$name'";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) == 0) {
    ?>
    <script>
        alert("No hay alumnos con ese nombre")
    </script>
    <?php
    include("../View/buscar.html");
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alumnos</title>
        <link rel="stylesheet" href="../style.css">
    </head>

    <body>
        <header>
            <a href="../index.php">
                <h1>REPASO PARA PRUEBA PARCIAL</h1>
            </a>
        </header>
        <div class="content">
            <div class="title">
                <h1>ALUMNOS</h1>
            </div>
            <div class="wrapper">
                <div class="flip-card__inner">
                    <div class="flip-card__front">
                        <?php
                        while ($estu = $res->fetch_assoc()) {
                            ?>
                            <div class="card-client">
                                <div class="user-picture">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="name-client">
                                    <?php echo $estu["NombreEstu"]; ?>
                                </p>
                                <div class="social-media">
                                    <?php echo "Nota redondeada: ";
                                    echo $estu["NotaRedond"] ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
    <?php
}
?>