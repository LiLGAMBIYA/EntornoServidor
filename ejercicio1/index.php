<?php
$nombre = "Hugo";
$apellidos = "López Díaz";
$edad = 18;
$ciudad = "Granada";
$fechanacimiento = date("2006-08-10");
$hoy = date("2025-02-10");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        html{padding: 0; margin: 0; box-sizing: border-box;}
        body { font-family: Arial; background: #f0f0f0; text-align: center; padding: 20px; }
        h1 { color: #333; }
        p { font-size: 18px; }
        header{background-color: black}
        li {list-style: none; color: white}
        ul{display: flex;justify-content: space-around; padding: 10px;}
    </style>
</head>
<body>
<header>
    <ul>
        <li>Inicio</li>
        <li>Actualizar</li>
        <li>Info</li>
        <li>Ver mas</li>
    </ul>
</header>
<h1>Bienvenido a mi página</h1>
<p>Nombre: <?php echo $nombre; ?></p>
<p>Apellidos: <?php echo $apellidos; ?></p>
<p>Edad: <?php echo $edad; ?> años</p>
<p>Ciudad: <?php echo $ciudad; ?></p>
<p>Fecha de nacimiento: <?php echo $fechanacimiento; ?></p>
<p>Hoy es: <?php echo $hoy; ?></p>
</body>
</html>
