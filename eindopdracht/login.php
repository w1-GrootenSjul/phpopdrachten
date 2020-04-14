<?php
/**
 * Username: Sjul Grooten
 * Date: 3-3-2020
 * Time 12:08 PM
 * File: opdracht_3-3.php
 */
?>

<?php
    include("script.php");
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
<?php
include("../includes/header.php");
?>
<div>
    <aside>
        <h2>Menu</h2>
        <a href="../index.php">Terug</a>
    </aside>
    <main id="wrapper">
        <h2>Bergheen</h2>

        <?php
            if($loginSuccess == false)
            {
                // Laat dit via echo zien:
                echo("<p>Login om onze adresgegevens + openingstijden te zien</p>");
                echo($message);
                echo("
                        <form action='login.php' method='post'>
                            <input type='text' name='username'><br>
                            <input type='password' name='password'><br>                          
                            <input type='submit' value='login'>
                        </form>       
                    ");

            }
        ?>


        <?php
        // Tonen van adresgegevens bij correcte login
            if($loginSuccess == true)
            {
                echo("<p>Welkom!</p>");

                echo("<table><tr><td>");
                echo("<fieldset style='width: 200px;'>");
                echo("<legenda>Openingstijden</legenda>");
                echo("<p>Do: 22:00</p>");
                echo("<p>Vr: allday</p>");
                echo("<p>Za: All day</p>");
                echo("<p>Zo: 12:00</p>");
                echo("</fieldset>");
                echo("</td><td>");

                echo("<fieldset style='width: 200px;height: 170px;'>");
                echo("<legenda>Adresgegevens</legenda>");
                echo("<p>Am Wriezener Bahnhof</p>");
                echo("<p>10243 Berlin</p>");
                echo("<p>Duitsland</p>");
                echo("</fieldset>");
                echo("</td></tr></table>");

                echo("<p>Deze gegevens dien je ten alle tijden geheim te houden!</p>");
            }
        ?>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
