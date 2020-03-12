<?php
/**
 * Username: Sjul Grooten
 * Date: 20-2-2020
 * Time 10:01 AM
 * File: footer.php
 */
?>

<?php
date_default_timezone_set("Europe/Amsterdam");
$uur = date("H");

if($uur <= 5)
{
    $greeting = "Goedennacht ";
}
else if($uur < 12)
{
    $greeting = "Goedenochtend ";
}
else if($uur < 17)
{
    $greeting = "Goedenmiddag ";
}
else
{
    $greeting = "Goedenavond ";
}
?>

<?php
    include("variabelen.php");

    // De footer via echo getoond aan de gebruiker
    echo("<footer>");
    echo($greeting . " bezoeker");
    echo("&copy; " . $year . " " . $name);
    echo("<footer>");
?>
<style>
    footer
    {
        background-color: gainsboro;
    }
</style>