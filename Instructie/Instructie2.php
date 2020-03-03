<!DOCTYPE HTML>
<html>
    <head>

    </head>
    <body>

        <?php
            // Instructie 1 Hoofdstuk 4

            // Vertellen dat ons script de tijdzones van Hong Kong moet aanhouden.
            date_default_timezone_set("Asia/Hong_Kong");

            // Toon de tijd in HH:MM fromaat
            $currentTime = date("D Y-m-d H:i:s");
            echo("<p>Huidige tijd: " . $currentTime . "</p>");

            // Oefening 2: switch
            $currentHour = date("D");
            switch($currentHour)
            {
                case "Mon":
                    echo("Het is maandag");
                    // Code komt hier, zoveel als je wilt
                    break;
                case "Tue":
                    echo("Het is dinsdag");
                    break;
                case "Wed":
                    echo("Het is woensdag");
                    break;
                case "Thur":
                    echo("Het is donderdag");
                    break;
                case "Fri":
                    echo("Het is vrijdag");
                    break;
                case "Sat":
                    echo("Het is zaterdag");
                    if($name == "Sjul")
                    {
                        // Do stuff
                    }
                    break;
                case "Sun":
                    echo("Het is zondag");
                    break;
                default:
                    // Code voor de "else" komt hier
                    echo("Yo, deze dag ken ik niet");
            }

        ?>

    </body>
</html>

