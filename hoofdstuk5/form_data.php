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
        <table style="border-collapse: collapse">
            <?php
            if(empty($_GET) == false)
            {
                $userCompanyName = $_GET["companyName"];
                echo("<tr><td style='border: 1px solid black'>Bedrijfsnaam:</td><td style='border: 1px solid black'>" . $userCompanyName . "</td></tr>");

                $userFirstName = $_GET["firstName"];
                echo("<tr><td style='border: 1px solid black'>Voornaam</td><td style='border: 1px solid black'>" . $userFirstName . "</td></tr>");

                $userLastName = $_GET["lastName"];
                echo("<tr><td style='border: 1px solid black'>Achternaam:</td><td style='border: 1px solid black'>" . $userLastName . "</td></tr>");

                $userPhoneNumber = $_GET["phoneNumber"];
                echo("<tr><td style='border: 1px solid black'>Telefoon:</td><td style='border: 1px solid black'>" . $userPhoneNumber . "</td></tr>");

                $userEmail = $_GET["email"];
                echo("<tr><td style='border: 1px solid black'>E-mail:</td><td style='border: 1px solid black'>" . $userEmail . "</td></tr>");

                $userMessage = $_GET["message"];
                echo("<tr><td style='border: 1px solid black'>Bericht: </td><td style='border: 1px solid black'>" . $userMessage . "</td></tr>");
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
