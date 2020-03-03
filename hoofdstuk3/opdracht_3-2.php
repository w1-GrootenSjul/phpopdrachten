<?php
/**
 * Username: Sjul Grooten
 * Date: 20-2-2020
 * Time 09:41 AM
 * File: opdracht_3-2.php
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
            // Declareren en initialiseren van de gewenste variabelen
            $trafficLightColor = "oranje";
            $ambulanceComig = true;

            // driveOn declareren in initaliseren
            $driveOn = true;

            // Checken of auto mag doorrijden of moet stoppen
            if($trafficLightColor == "groen" && $ambulanceComig == false)
            {
                $driveOn = true;
            }
            else if($trafficLightColor == "oranje" || $ambulanceComig == false)
            {
                $driveOn = false;
            }
            else if($trafficLightColor == "rood" || $ambulanceComig == true)
            {
                $driveOn = false;
            }
            else
            {
                $driveOn = true;
                echo("<p>Foutje. Het stoplicht heeft een ongeldige kleur!s</p>");
            }

            // Tonen van melding aan de automobilist
            if($driveOn == true)
            {
                echo("<h1 style='color: green;'>U mag doorrijden</h1>");
            }
            else
            {
                echo("<h1 style='color: red;'>U mag NIET doorrijden</h1>");
            }

            // Deel 2: Alcohol in verschillende landen opdracht
            $countryName = "Nederland";
            $currentAge = 16;

            // Tonen  algemene gegevens
            echo("<p>Je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud.</p>");

            if($countryName == "België" && $currentAge >= 16 && $currentAge < 18)
            {
                echo("<p>Je mag hier zwakke alcohol drinken</p>");
            }
            else if($countryName == "België" && $currentAge >= 18)
            {
                echo("<p>Je mag hier sterke alcohol drinken</p>");
            }
            else if($countryName == "Bulgarije" && $currentAge >= 18)
            {
                echo("<p>Je mag hier sterke alcohol drinken</p>");
            }
            else if($countryName == "Cyprus" && $currentAge >= 17)
            {
                echo("<p>Je mag hier sterke alcohol drinken</p>");
            }
            else if($countryName == "Nederland" && $currentAge >= 18)
            {
                echo("<p>Je mag hier sterke alcohol drinken</p>");
            }
            else if($countryName == "Zweden" && $currentAge >= 18 && $currentAge < 20)
            {
                echo("<p>Je mag hier zwakke alcohol drinken</p>");
            }
            else if($countryName == "Zweden" && $currentAge >= 20)
            {
                echo("<p>Je mag hier sterke alcogol drinken</p>");
            }
            else
            {
                echo("<p>Hier mag je GEEN alcohol drinken</p>");
            }
        ?>
    </main>
    <?php
    include("../includes/footer.php");
    ?>
</div>
</body>
</html>
