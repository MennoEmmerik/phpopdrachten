<!--
Auteur:         Menno Emmerik
Aanmaakdatum:   28-2-2020 + 10:56
Bestandsnaam:   footer.php
-->

<?php
include "../hoofdstuk3/variabelen.php";
?>
<footer>
    <?php
    echo $name . ", " . $klas . ", " . $year . " ";

    //Dit behoort tot opdracht 4.1
    //Het opslaan van de tijd
    $uur = date("H");
    //De juiste tijdzone aanhalen
    date_default_timezone_set("Europe/Amsterdam");
    //Bij de juiste tijd, de juiste begroeting.
    if($uur >= 0 && $uur < 5)
    {
        echo "Goedennacht";
    }
    else if ($uur >= 5 && $uur < 12)
    {
        echo "Goedenochtend";
    }
    else if ($uur >= 12 && $uur < 17)
    {
        echo "Goedenmiddag";
    }
    else
    {
        echo "Goedenavond";
    };


    session_start();
    if (isset($_SESSION['username']))
    {
        $bezoeker = $_SESSION['username'] . "&nbsp;<ahref='/phpopdrachten/hoofdstuk6/loguit.php'>Loguit</a>";
    }
    else
    {
        $bezoeker = "onbekende bezoeker" . "&nbsp;<ahref='/phpopdrachten/hoofdstuk6/opdracht61.php'>Login</a>";
    }
    ?>

</footer>
</body>
</html>