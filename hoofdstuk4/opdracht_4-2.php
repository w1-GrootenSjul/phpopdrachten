<?php
/**
 * Username: Sjul Grooten
 * Date: 3-3-2020
 * Time 12:08 PM
 * File: opdracht_4-2.php
 */
?>

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
        <?php
        include("../scripts/script_4-2.php");
        echo("<p>Voor het vak <span class='dik'>" . $coursName . "</span> heb je <span class='dik'>" . $teacherName . "</span> als docent.</p>")
        ?>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
