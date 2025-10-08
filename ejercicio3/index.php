<?php
include("config.php");

$page = $_GET['page'] ?? 'inicio';
?>

<?php include("includes/header.php"); ?>

<main>
    <?php
    if (in_array($page, $paginas_validas)) {
        include("pages/$page.php");
    } else {
        echo "<h2>Página no encontrada</h2>";
        echo "<p>La página no existe.</p>";
    }
    ?>
</main>

<?php include("includes/footer.php"); ?>

