<?php
/**
 * Username: Sjul Grooten
 * Date: 13-2-2020
 * Time 09:47 AM
 * File: opdracht_2-2.php
 */

$text1 = "Hallo";
$text2 = "een makkelijke taal";
$text3 = "toch zo'n makkelijke taal";
$text4 = "wat is";
$text5 = "PHP";
$text6 = "Nooit gedacht dat";
$text7 = "De installatie is best ingewikkeld";
$text8 = "Fijn";
$text9 = "?";
$text10 = ".";
$text11 = ",";
$text12 = "<br>";
$text13 = "is";
$text14 = "Vind je niet";
$text15 = "toch";
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
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<div>
    <aside>
        <h2>Menu</h2>
        <a href="../index.php">Terug</a>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <h3>Taak 2</h3>
        <?php echo $text1 . $text11 . " " . $text5 . " " . $text15 . " " . $text2 . $text10 . $text12 . $text7 . $text10 . " " . $text8 . "" . $text15 . $text9 . $text12 . $text6 . " " . $text5 . " " . $text3 . " " . $text13 . $text10 ?>
        <h3>Taak 3</h3>
        <p><?php echo $text1 . $text11 . $text12 . $text8 . " " . $text15 . " dat " . $text5 . " zo'n makkelijke taal " . $text13 . $text10 . $text12 . $text7 . $text10 . " " . $text14 . $text9 ?></p>
    </main>
</div>
</body>
</html>