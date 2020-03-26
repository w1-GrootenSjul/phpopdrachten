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
        <h2>Uitschrijfformullier KW1C</h2>
        <hr>
        <table style="border-collapse: collapse">
            <?php
            if(empty($_GET) == false)
            {
                $userFullName = $_GET["fullName"];
                echo("<tr><td style='font-style: italic'>Voor en achternaam:</td><td>" . $userFullName . "</td></tr>");

                $userStudentNumber = $_GET["studentNumber"];
                echo("<tr><td style='font-style: italic'>Studentennummer:</td><td>" . $userStudentNumber . "</td></tr>");

                $userDate = $_GET["date"];
                echo("<tr><td style='font-style: italic'>Datum van uitschrijving</td><td>" . $userDate . "</td></tr>");

                $userReason = $_GET["reason"];
                echo("<tr><td style='font-style: italic'>Reden van uitschrijving</td><td>" . $userReason . "</td></tr>");

                $userYear = $_GET["year"];
                echo("<tr><td style='font-style: italic'>Leerjaar</td><td>" . $userYear . "</td></tr>");

                if (isset($_GET["apply"]) == true && $_GET["apply"] == "Ja") {
                    echo("<tr><td style='font-style: italic'>Aanmelden bij de succesklas:</td><td>JA</td>");
                }
                else {
                    echo("<tr><td style='font-style: italic'>Aanmelden bij de succesklas:</td><td>NEE</td>");
                }

                if (isset($_GET["delete"]) == true && $_GET["delete"] == "Ja") {
                    echo("<tr><td style='font-style: italic'>Verwijderen gegevens:</td><td>JA</td>");
                }
                else {
                    echo("<tr><td style='font-style: italic'>Verwijderen gegevens:</td><td>NEE</td>");
                }

                $userDescription = $_GET["description"];
                echo("<tr><td>Reden van uitschrijving:</td></tr><tr><td>" . $userDescription . "</td></tr>");
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
