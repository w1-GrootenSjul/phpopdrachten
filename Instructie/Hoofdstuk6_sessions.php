<?php
    // PHP Sessions voorbeeld

    // Sessie starten
    session_start();            // Belangrijk!!

    // Session vullen met data
    if(isset($_GET["txtUsername"]) == true) {
        $_SESSION["username"] = $_GET["txtUsername"];
    }

?>




<html>
    <head>

    </head>
    <body>
        <form method="get" action="Hoofdstuk6_sessions.php">
            <input type="text" name="txtUsername">
            <input type="submit" value="Verzenden">
        </form>
    </body>
</html>
