<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Has Perdido</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>¡Lo Siento!</h1>
    <p class="resultado">Has perdido, ¡que pena! La palabra era: <strong><?php echo $_SESSION['palabra']; ?></strong>
    </p>
    <a href="index.php" class="boton">Jugar de nuevo</a>
</body>

</html>