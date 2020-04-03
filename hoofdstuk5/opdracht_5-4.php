
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
<?php
include("../includes/header.php");
?>
<div>
    <aside>
        <h2>Menu</h2>
        <a href="../index.php">Terug</a>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>

        <form action="opdracht_5-4.php" method="POST">
            <table>
                <tr>
                    <td>
                        <p>Komt er een ambulance aan?</p>
                    </td>
                    <td>
                        <input type="radio" name="ambulanceComing" value="yes">Ja
                        <input type="radio" name="ambulanceComing" value="no">Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Stoplicht kleur?</p>
                    </td>
                    <td>
                        <?php
                        // Bestaat $_POST["trafficLightColor"]? Dan voert hij de tweede if() statement uit
                        if($_SERVER["REQUEST_METHOD"] == "POST")
                        {
                            // Bepaal of trafficLightColor geldige waardes heeft
                            if(isset($_POST["trafficLightColor"]) == false)
                            {
                                echo("<p style='color: red'>U heeft een ongeldige invoer gegeven.</p>");
                            }
                        }
                        ?>

                        <input type="radio" name="trafficLightColor" value="green">Groen
                        <input type="radio" name="trafficLightColor" value="orange">Oranje
                        <input type="radio" name="trafficLightColor" value="red">Rood
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Verzend">
                    </td>
                </tr>
            </table>
        </form>

        <?php

            if(isset($_POST["ambulanceComing"]) == true && isset($_POST["trafficLightColor"]) == true)
            {
                echo("<h1>Wat is de situatie en wat moet ik doen?</h1>");
                echo("<table>");

                if($_POST["trafficLightColor"] == "green")
                {
                    echo("<p>Het stoplicht staat op groen</p>");
                }
                else if($_POST["trafficLightColor"] == "orange")
                {
                    echo("<p>Het stoplicht staat op oranje</p>");
                }
                else if($_POST["trafficLightColor"] == "red")
                {
                    echo("<p>Het stoplicht staat op rood</p>");
                }

                // Tonen of er een ambulance aankomt
                echo("<p>En er komt een ambulance aan: " . $_POST["ambulanceComing"] . "</p>");

                // Mag ik verder rijden?
                if($_POST["trafficLightColor"] == "green" && $_POST["ambulanceComing"] == "no")
                {
                    echo("<p style='color: green'>Je mag doorrijden</p>");
                }
                else
                {
                    echo("<p style='color: red'>Je MOET stoppen</p>");
                }

                echo("<table>");
            }

        ?>

    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
