<?php
/**
    // $dayNames = array("Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag");

    $dayNames = array("Donderdag", "Vrijdag", "Zaterdag", "Zondag", "Maandag", "Dinsdag", "Woensdag");

    for($dayNumber = 0; $dayNumber < 7; $dayNumber++)
    {
        $dateAsNumber = strtotime("+$dayNumber days");
        echo("Dag " . $dayNumber . " is " . $dayNames[$dayNumber] . " " . date("d-m-Y", $dateAsNumber) . "<br>");
    }
 */
?>

<?php
$datumAlsGetal = strtotime("now");
$dagNamen = array("zondag", "maandag" , "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag");

for($c = 0; $c <= 7; $c++)
{
    $datumAlsGetal = strtotime("+$c days");
    $dagNummer = date("w", $datumAlsGetal);
    echo("Dag " . $dagNummer . " is " . $dagNamen[$dagNummer] . " " . date("d-m-Y" , $datumAlsGetal));
    echo("<br>");
}
?>

