<?php
    // Variabelen
    // - strings
    // - integer / number
    // - boolean

    // String
    $firstName = "Sjul";
    $lastName = "Grooten";

    $fullName = $firstName . " " . $lastName;


    // Integer / Number
    $yearOfBirth = 2003;
    $currentYear = date("Y");
    $age = $currentYear - $yearOfBirth;


    // Boolean
    $fromMaaskantje = false;
    $isMale = true;

    if( $fromMaaskantje == true)
    {
        if( $isMale == true)
        {
            echo("<p>Wie is hier nou de snackbar?</p>");
        }
        else
        {
            echo("<p>Knappe vrouwen flirten, nooit meer in het arbeidsproces begeven</p>");
        }
    }
    else
    {
        if( $isMale == true)
        {
            echo("<p>Je bent een koele knaap</p>");
        }
        else
        {
            echo("<p>Je bent een oele vrouwlijke knaap</p>");
        }
    }

    // echo commando
    echo("<p>Hallo</p>");

    // echo commando als terminal manier
    echo "<p>Dit is een echo commando</p>"
?>

<div>
    <?php
        echo("<h1>Hallo " . $fullName . "</h1>");
        echo("<h2>Je leeftijd is: " . $age . "</h2>");
    ?>
</div>

