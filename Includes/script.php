<?php
// Modelleren               - Wim van Bijnen
// Digitale vaardigheden    - Larissa Pielage
// Computertekenen          - Pieter van den Berg
// Databse / SQL            - Ralph Gijsbrechts
// Javascript               - Remco Evers
// ASP                      - Martijn van Meer
// PHP                      - Ron Spierings
// Nederlands               - Jan-Chris van den Ende
// Engels                   - Jan Giesen
// Rekenen                  - Martijn van de Wetering
// Loopbaan en Burgerschap  - Alper Bolattekin

$coursName = "Loopbaan en Burgerschap";
switch($coursName)
{
    case"Modelleren":
        $teacherName = "Wim van Bijnen";
        break;
    case"Digitale vaardigheden":
        $teacherName = "Larissa Pielage";
        break;
    case"Computertekenen":
        $teacherName = "Pieter van den Berg";
        break;
    case"Database / SQL":
        $teacherName = "Ralph Gijsbreachts";
        break;
    case"Javascript":
        $teacherName = "Remco Evers";
        break;
    case"ASP":
        $teacherName = "Martijn van Meer";
        break;
    case"PHP":
        $teacherName = "Ron Spierings";
        break;
    case"Nederlands":
        $teacherName = "Jan-Chris van den Ende";
        break;
    case"Engels":
        $teacherName = "Jan Giesen";
        break;
    case"Rekenen":
        $teacherName = "Martijn van de Wetering";
        break;
    case"Loopbaan en Burgerschap":
        $teacherName = "Alpen Bolattekin";
        break;
    default:
        echo("Dit is geen bestaand vak");
}
echo("<p>Voor het vak <span class='dik'>" . $coursName . "</span> heb je <span class='dik'>" . $teacherName . "</span> als docent.</p>")
?>
<style>
    .dik
    {
        font-weight: bold;
    }
</style>
