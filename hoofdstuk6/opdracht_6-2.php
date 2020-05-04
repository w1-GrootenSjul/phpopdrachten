
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
                <h3>Spel Steen papier schaar</h3>
                <p>Speel het spel steen - papier - schaar tegen de computer</p>
                <form id="gameFrm" method="get" action="opdracht_6-2.php">
                    <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen"><img src="../images/steen.jpg"></div>
                    <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier"><img src="../images/papier.jpg"></div>
                    <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar"><img src="../images/schaar.jpg"></div>
                </form>
                <?php
                //Wat kiest de computer
                //Random wordt er een getal tussen 0 en 2 gekozen
                $opties = array("steen", "papier", "schaar");
                $computerkeuzegetal = rand(0, 2);
                $computerkeuze = $opties[$computerkeuzegetal];
                $message = "Start het spel door schaar, papier of steen te kiezen. De computer kiest tegelijkertijd met jou.";

                session_start();
                if(!isset($_SESSION["stand"])) {
                    $_SESSION["stand"] = 0;
                    $_SESSION["stant"] = 0;
                }
                if (isset($_GET["keuze"])) {
                    $spelerkeuze = $_GET["keuze"];
                    echo "Jij koos: <img src='../images/{$spelerkeuze}.jpg'>&nbsp;&nbsp;De computer koos: <img src='../images/{$computerkeuze}.jpg'>";
                    if ($computerkeuze == $spelerkeuze) {
                        $_SESSION["stand"] +=1;
                        $_SESSION["stant"] +=1;
                        $message = "Gelijk!";
                    } else if ($computerkeuze == "steen" && $spelerkeuze == "papier" || $computerkeuze == "papier" && $spelerkeuze == "schaar" || $computerkeuze == "schaar" && $spelerkeuze == "steen") {
                        $message = "Jij scoort";
                        $_SESSION["stand"] +=1;
                    } else if ($computerkeuze == "steen" && $spelerkeuze == "schaar" || $computerkeuze == "papier" && $spelerkeuze == "steen" || $computerkeuze == "schaar" && $spelerkeuze == "papier") {
                        $message = "Computer scoort";
                        $_SESSION["stant"] +=1;
                    }
                    if($_SESSION["stand"] == 5 || $_SESSION["stant"] == 5) {
                        if($_SESSION["stand"] == 5) {
                            $message = "<p> Jij wint! </p> <p> Het spel start opnieuw als je een nieuwe keuze maakt </p>";
                        } else if($_SESSION["stant"] == 5) {
                            $message = "<p> De Computer wint! </p> <p> Het spel start opnieuw als je een nieuwe keuze maakt </p>";
                        }
                        session_destroy();
                    }
                    echo("<p>" . $message . "</p> <p>De score is " . $_SESSION["stand"] . " tegen " . $_SESSION["stant"]);
                } else {
                    echo("<p>" . $message . "</p>");
                }
                ?>
            </main>
        </div>
        <?php
        //include("../includes/footer.php");
        ?>
    </body>
</html>
