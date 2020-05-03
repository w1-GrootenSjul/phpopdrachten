<?php
    // Starten van de sessie
    session_start();

    // Tonen van de gegeves
    echo("<p>Gebruikte username is: " . $_SESSION["username"] . "</p>");

    ?>

