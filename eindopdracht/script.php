<?php

    // Username en wachtwoord combinaties
    $userArrayList = [
        "Sjul" => "ikkenietweeten",
        "Koos" => "BedanktVoorDeEer",
        "Jim" => "CarlWheezer",
        "Niels" => "highschooldxd",
        "Jordan" => "hond",
        "Dion" => "garfield",
        "Kaj" => "anime4life",
        "Luna" => "skeelers",
        "Alco" => "schildpad",
        "PussySlayer69" => "admin"
    ];

    // Eventuele foutmeldingen komen in deze string
    $message = "";
    // Is de persoon succesvol ingelogd?
    $loginSuccess = false;

    // Checken of gegeven username en wachtwoord bestaat in de arrat $userArrayList
    if(isset($_POST["username"]) == true && isset($_POST["password"]) == true)
    {
        // foreach gebruiken we om door de $userArratList heen te loopen
        foreach($userArrayList as $index => $value)
        {
            // bepalen of opgegeven $_POST waardes in de array aanwezig zijn
            if($_POST["username"] == $index && $_POST["password"] == $value)
            {
                // Username en password zijn gevonden!
                $loginSuccess = true;
            }
            else
            {
                $message = "<p style='color: red'>foutieve username en/of wachtwoord</p>";
            }
        }
    }

?>