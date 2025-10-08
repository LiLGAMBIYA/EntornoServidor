<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
            color: #333;
            margin: 0;
            text-align: center;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            padding: 20px;
        }
        footer {
            background-color: #eee;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<header>
    <h1><?php echo $titulo; ?></h1>
    <nav>
        <a href="index.php">Inicio</a> |
        <a href="acercade.php">Acerca</a> |
        <a href="contacto.php">Contacto</a>
    </nav>
</header>
<hr>
