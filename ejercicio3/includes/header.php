<?php
$current_page = $_GET['page'] ?? 'inicio';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f8f8f8;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
        }
        h1 { margin: 0 0 10px 0; font-size: 1.8rem; }
        nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        nav a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        nav a.active {
            background-color: white;
            color: #007bff;
            font-weight: bold;
        }
        main {
            flex: 1;
            padding: 20px;
            max-width: 900px;
            margin: auto;
            text-align: center;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        footer {
            background-color: #eee;
            text-align: center;
            padding: 10px;
            font-size: 0.9rem;
            margin-top: 20px;
        }
        /* --- Responsive --- */
        @media (max-width: 768px) {
            h1 { font-size: 1.5rem; }
            nav { flex-direction: column; }
            main { padding: 15px; }
        }
        @media (max-width: 480px) {
            h1 { font-size: 1.3rem; }
            nav a { padding: 6px 10px; font-size: 0.9rem; }
        }
    </style>
</head>
<body>
<header>
    <h1><?php echo $titulo; ?></h1>
    <nav>
        <a href="?page=inicio" class="<?php if($current_page=='inicio') echo 'active'; ?>">Inicio</a>
        <a href="?page=about" class="<?php if($current_page=='about') echo 'active'; ?>">Acerca</a>
        <a href="?page=contacto" class="<?php if($current_page=='contacto') echo 'active'; ?>">Contacto</a>
    </nav>
</header>
<main>
