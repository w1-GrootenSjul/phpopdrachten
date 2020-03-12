<?php
    $task2 = "Lancering in: ";
    $counter = 19;

    while($counter > 0)
    {
        $task2 = $task2 . $counter . ", ";
        $counter--;
    }

    $task3 = "Lanceering in: ";
    for($c = 19; $c > 0; $c--)
    {
        $task3 = $task3 . $c . ", ";
    }

    $task4 = "";
    $c2 = 1;
    while($c2 <= 6)
    {
        $task4 = $task4 . "<h" . $c2 . "> Dit is de " . $c2 . "e iteratie </h" . $c2 . ">";
        $c2++;
    }

    $task5 = "";

    for($c5 = 1; $c5 <= 10; $c5++) {

        $task5 =  $task5 . "<tr><td>Dit is de " . $c5 . "e iteratie</td></tr>";
    }
    $task5 = "<table>" . $task5 . "</table>";

    $task6 = "";
    $year = date("Y");
    $age = 17;
    while($age >= 0)
    {
        if($year == 2020)
        {
            $task6 = $task6 . "<p>In " . $year . " word ik " . $age . " jaar oud.</p>";
        }
        else if($year == 2003)
        {
            $task6 = $task6 . "<p>In " . $year . " ben ik geboren.</p>";
        }
        else
        {
            $task6 = $task6 . "<p>In " . $year . " was ik " . $age . " jaar oud.</p>";
        }
        $year--;
        $age--;
    };

    $task7 = "";
    for($year2 = date("Y"), $age2 = 17; $age2 >= 0, $year2 >= 2003; $age2--, $year2--)
    {
        if($year2 == 2020)
        {
            $task7 = $task7 . "<p>In " . $year2 . " word ik " . $age2 . " jaar oud.</p>";
        }
        else if($age2 == 12 && $year2 == 2015)
        {
            $task7 = $task7 . "<p>In " . $year2 . " was ik " . $age2 . " jaar oud en werd ik een puber.</p>";
        }
        else if($age2 == 8 && $year2 == 2011)
        {
            $task7 = $task7 . "<p>In " . $year2 . " was ik " . $age2 . " jaar oud en werd ik een tiener.</p>";
        }
        else if($age2 == 4 && $year2 == 2007)
        {
            $task7 = $task7 . "<p>In " . $year2 . " was ik " . $age2 . " jaar oud en werd ik een kleuter.</p>";
        }
        else if($age2 == 2 && $year2 == 2005)
        {
            $task7 = $task7 . "<p>In " . $year2 . " was ik " . $age2 . " jaar oud en werd ik een peuter.</p>";
        }
        else if($year2 == 2003)
        {
            $task7 = $task7 . "<p>In " . $year2 . " ben ik geboren.</p>";
        }
        else
        {
            $task7 = $task7 . "<p>In " . $year2 . " was ik " . $age2 . " jaar oud.</p>";
        }
    };
?>

