<?php
/**
 * Username: Sjul Grooten
 * Date: 20-2-2020
 * Time 09:41 AM
 * File: opdracht_3-1.php
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        This is the title
    </title>
    <meta name="description" content="...">
    <meta name="keywords" content="...">
    <meta charset="utf-8">
    <link href="../css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<div>
    <aside>
        <h2>Menu</h2>
        <a href="../index.php">Terug</a>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <?php
            $evenement = "Elfstedentocht";
            $evenementFries = "Alvestêdetocht";
            $lengte = 200;
            $soort = "schaatstocht";
            $soortIjs = "natuurijs";
            $organisator = "Koningklijke Vereniging De Friesche Elf Steden";
            $hStad = "Leeuwarden";
            $provincie = "Friesland";
            $keer = 15;
            $eerste = 1909;
            $max = 1;

            $verhaal = "<p>De Elfstedentocht (Fries: Alvestêdetocht) is een 200 kilometer lange schaatstocht over natuurijs die wordt georganiseerd door de Koninklijke Vereniging De Friesche Elf Steden. Leeuwarden, de hoofdstad van Friesland, is start- en aankomstplaats. De Elfstedentocht is inmiddels 15 maal verreden en werd voor het eerst in 1909 gereden en wordt maximaal 1 keer per winter gehouden.";

            echo($verhaal);

            $verhaal2 = "<p>De " . $evenement . " (Fries: " . $evenementFries . ") is een " . $lengte . " kilometer lange " . $soort . "over " . $soortIjs . " die wordt georganiseerd door de " . $organisator . ". " . $hStad . ", de hoofdstad van " . $provincie . ", is start- en aankomstplaats. De elfstedentocht is inmiddels " . $keer . " maal verreden en werd voor het eerst in " . $eerste . " gereden en wordt maximaal " . $max . " keer per winter gehouden.</p>";

            echo($verhaal2);
        ?>
    </main>
    <?php
    include("../includes/footer.php");
    ?>
</div>
</body>
</html>
