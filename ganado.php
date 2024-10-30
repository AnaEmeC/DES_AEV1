<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_destroy(); // destruyo la sesión para empezar un nuevo juego
    header("Location: index.php");
    exit();
}
?>

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
    <form method="post">
        <button type="submit" class="boton">Jugar de nuevo</button>
    </form>
</body>

</html>