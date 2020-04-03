
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
        <form action="form_data_5.3.php" method="post">
            <p style="font-size: 20px;">Corona enquete:</p><br><hr>
            <table>
                <tr>
                    <td style="font-weight: bold">Wat is je naam:</td>
                    <td><input type="text" name="fullName"></input></td>
                </tr>
                <tr>
                    <td style="font-weight: bold">Wat is je leeftijd:</td>
                    <td><input type="number" name="age"></td>
                </tr>
                <tr>
                    <td style="font-weight: bold">Gemeente:</td>
                    <td><select name="township">
                            <option value="Den Bosch">Den Bosch</option>
                            <option value="Amsterdan">Amsterdam</option>
                            <option value="Utrecht">Utrecht</option>
                            <option value="Rotterdam">Rotterdam</option>
                            <option value="Tilburg">Tilburg</option>
                            <option value="Breda">Breda</option>
                            <option value="Groningen">Groningen</option>
                            <option value="Den Haag">Den Haag</option>
                        </select></td>
                </tr>
                <tr>
                    <td style="font-weight: bold">Aantal inwoners gemeente:</td>
                    <td><input type="number" name="citizens"></td>
                </tr>
            </table>
            <span style="font-weight: bold">Ken je mensen die besmet zijn in je woonplaats?</span>
            <input type="radio" name="userInfected" value="Ja">Ja
            <input type="radio" name="userInfected" value="Nee">Nee<br>
            <span style="font-weight: bold">Aantal mensen besmet in je gemeente? *</span>
            <input type="number" name="infected"><br>
            <input type="submit" value="verzend">
            <p style="font-size: 18px;">* Zie aantallen per gemeente per 100.000 bewoners <span style="color: blue;">site RIVM</span></p>
        </form>

    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
