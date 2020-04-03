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
        <table>
            <tr>
                <td style="background-color: green; color: white;">Vraag</td>
                <td style="background-color: green; color: white;">Antwoord</td>
            </tr>
            <?php
                include("../Includes/functions.php");
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $userFullName = $_POST["fullName"];
                    echo("<tr><td>Naam</td><td>" . $userFullName . "</td></tr>");

                    $userAge = $_POST["age"];
                    echo("<tr><td>Leeftijd</td><td>" . $userAge . "</td></tr>");

                    $userTownship = $_POST["township"];
                    echo("<t><td>Gemeente</td><td>" . $userTownship . "</td></t>");

                    $userInhabitants = $_POST["citizens"];
                    echo("<tr><td>Inwoners</td><td>" . $userInhabitants . "</td></tr>");

                    $userInfected = $_POST["infected"];
                    echo("<tr><td>Aantal besmet</td><td>" . $userInfected . "</td></tr>");

                    $userUserInfected = $_POST["userInfected"];
                    if($userUserInfected == "Ja")
                    {
                        echo("<tr><td>Kennissen besmet</td><td>" . $userUserInfected . "</td></tr><tr><td>De kans is in realiteit groter omdat je via je eigen netwerk besmet kan raken.</td></tr>");
                    }
                    else if($userUserInfected == "Nee")
                    {
                        echo("<tr><td>Kennissen besmet</td><td>" . $userUserInfected . "</td></tr>");
                    }

                    echo("<tr><td>Kans per ontmoeting op besmetting</td><td>" . echoKans() . "%</td></tr>");

                    echo("<tr><td>Kans is 1 op</td><td>" . getKans1Op() . "</td></tr>");

                    $kans1op = getKans1op();
                    $vergelijking = vergelijkOorzaken($kans1op);

                    echo("<tr><td>" . $vergelijking . "</td></tr>");
                }



            ?>
        </table>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
