
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
        <h1>RESTARIA KEES KROKET</h1>
        <p>Visstraat 12</p>
        <p>5211 DN 's-Hertogenbosch</p>
        <p>073 613 6720</p>
        <p>info@restariakeeskroket.nl</p>
        <form action="form_data.php" method="get">
            <p>Bedrijfsnaam</p>
            <input type="text" name="companyName">

            <p>Voornaam</p>
            <input type="text" name="firstName">

            <p>Achternaam</p>
            <input type="text" name="lastName">

            <p>Telefoon</p>
            <input type="tel" name="phoneNumber">

            <p>E-mail</p>
            <input type="email" name="email">

            <p>Bericht</p>
            <textarea name="message"></textarea><br>

            <input type="submit" value="Versturen">
        </form>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
