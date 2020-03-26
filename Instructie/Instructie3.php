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
        <form action="Instructie3.php" method="get">
            <p>Voornaam</p>
            <input type="text" name="firstName">

            <p>Achternaam</p>
            <input type="text" name="lastName">

            <p>Geboortedatum</p>
            <input type="date" name="birthDate">

            <p>Eventuele klachten</p>
            <textarea name="disease"></textarea><br>

            <input type="submit" value="Verzenden a.u.b.">
        </form>


        <?php
            // Bepalen of er wel een formulier verzonden is
            if(empty($_GET) == false)
            {
                // Er is een formulier verzonden. Doe iets met de invoer van de gebruiker
                $userFirstName = $_GET["firstName"];
                echo ("<h1>Opgegeven naam: " . $userFirstName . "</h1>");

                $userLastName = $_GET["lastName"];
                echo("<h1>Opgegeven achternaam: " . $userLastName . "</h1>");

                $userBirthDate = $_GET["birthDate"];
                echo("<h1>Opgegeven geboortedatum: " . $userBirthDate . "</h1>");

                $userDisease = $_GET["disease"];
                echo("<h1>Opgegeven klachten: " . $userDisease . "</h1>");
            }

        ?>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
