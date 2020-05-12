
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

        // Open de database connectie en ODBC driver
        try
        {
            $pdo = new PDO("odbc:odbc2sqlserver");
        }
        catch (PDOException $e)
        {
            echo "<h1>Database error:</h1>";
            echo $e->getMessage();
            die();
        }

        // Ophalen van alle grappen
        try
        {
            // Query schrijven
            $sql = "SELECT * FROM joke";
            // Query uitvoeren
            $result = $pdo->query($sql);
        }
        catch (PDOException $e)
        {
            echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
            exit();
        }


        // Lege Array aanmaken voor de results
        $aJokes = array();
        // Door de results heen loopen via een while
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            // Result wegschrijven in de $aJokes array
            $aJokes[] = $row;
        }


        // Tonen van de grap in een tabel
        echo("<table>");
        echo("    <tr>");
        echo("      <th>ID</th>");
        echo("      <th>Joketext</th>");
        echo("      <th>Jokeclou</th>");
        echo("      <th>Jokedate</th>");
        echo("    </tr>");

        $counter = 0;
        while($counter < count($aJokes) )
        {
            echo("<tr>");
            echo("    <td>");
            echo($aJokes[$counter]["id"]);
            echo("    </td>");
            echo("    <td>");
            echo($aJokes[$counter]["joketext"]);
            echo("    </td>");
            echo("    <td>");
            echo($aJokes[$counter]["jokeclou"]);
            echo("    </td>");
            echo("    <td>");
            echo($aJokes[$counter]["jokedate"]);
            echo("    </td>");
            echo("</tr>");
            $counter++;
        }

        echo("</table>");
        ?>

    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>


