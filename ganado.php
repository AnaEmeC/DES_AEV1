<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>¡Has Ganado!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>¡Enhorabuena!</h1>
    <p class="resultado">¡Has ganado! La palabra era: <strong><?php echo $_SESSION['palabra']; ?></strong></p>
    <a href="index.php" class="boton">Jugar de nuevo</a>
</body>

</html>