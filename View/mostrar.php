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
            <h2>DATOS DE ALUMNOS</h2>
        </div>
        <div class="flip-card__front">
            <table>
                <tr>
                    <th>IdEstu</th>
                    <th>NombreEstu</th>
                    <th>NotaRedond</th>
                    <th>ASCII</th>
                </tr>
                <?php
                include("../Model/select.php");
                while ($est = $res->fetch_assoc()) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $est["IdEstu"] ?>
                        </td>
                        <td>
                            <?php echo $est["NombreEstu"] ?>
                        </td>
                        <td>
                            <?php echo $est["NotaRedond"] ?>
                        </td>
                        <td>
                            <?php echo ord($est["NotaRedond"]) ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>