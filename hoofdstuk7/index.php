
<!DOCTYPE html>
<html>
<head>
    <title>
        This is the title
    </title>
    <meta name="description" content="...">
    <meta name="keywords" content="...">
    <meta charset="utf-8">
    <link href="../css/Opdracht73.css" type="text/css" rel="stylesheet">
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


        // Inladen functies bestand
        include("functions.php");

        // Starten van een database connectie
        startConnection();

        // Executeren van een SQL query
        $query = "SELECT * FROM joke";
        if(isset($_GET["zoekterm"]) == true )
        {
            // Er is (via het formulier) een zoekterm opgegeven. Verander nu dus de $query
            $query = "SELECT * FROM joke WHERE joketext LIKE '%" . $_GET["zoekterm"] ."%'";
        }
        $jokes = executeQuery($query);

        echo "<p> $query </p>";

        echo ("<form action='index.php' method='GET'>");
        echo ("<span style='font-weight: bold'>zoekterm:</span><input type='text' name='zoekterm' style='margin-left: 5px;margin-right: 5px;'>");
        echo ("<input type='submit' value='zoeken'>");
        echo ("</form>");

        echo("<table>");
            echo("<tr>");
                echo("<th>Jokeid</th>");
                echo("<th>Joketext</th>");
                echo("<th>Jokeclou</th>");
                echo("<th>Jokedate</th>");
            echo("</tr>");
        // Resultaten rij voor rij ophalen
        while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
        {
            echo("<tr>");
                echo("<td>");
                    echo($row["id"]);
                echo("</td>");
                echo("<td>");
                    echo($row["joketext"]);
                echo("</td>");
                echo("<td>");
                echo($row["jokeclou"]);
                echo("</td>");
                echo("<td>");
                echo($row["jokedate"]);
                echo("</td>");
            echo("</tr>");
        }
        echo("</table>")
        ?>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>



