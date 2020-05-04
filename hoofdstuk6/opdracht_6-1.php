<?php
    session_start();

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
            <form method="post" action="checklogin.php">
                <input type="text" name="username">
                <input type="password" name="password">
                <input type="submit" value="Verzenden">
            </form>
        </main>
    </div>
    <?php
    include("../includes/footer.php");
    ?>
    </body>
</html>
