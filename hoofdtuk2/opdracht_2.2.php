<!--
Auteur:         Menno Emmerik
Aanmaakdatum:   19-09-2019 + 10:56
Bestandsnaam:   opdracht_2.2.php
-->

<?php
    $text1 = "Hallo ";
    $text2 = "toch een makkelijke taal";
    $text3 = "wat is ";
    $text4 = "PHP ";
    $text5 = "nooit gedacht dat ";
    $text6 = "de ingewikkelde installatie ";
    $text7 = "fijn toch? ";
    //onder het commentaar is er bij gekomen voor taak 3
    $text8 = "ondanks ";
    $text9 = "blijkt te zijn ";
    $text10 = "Eigenlijk";
?>
<!DOCTYPE html>

<html>
    <head>
        <!--Letterypen set voor de Europeanen-->
        <meta charset="utf-8">
        <!--Beshrijving van de website-->
        <meta name="description" content="Wil jij ook een knallend feest geven, neem dan nu snel een kijkje in de Partybag">
        <!--Hier moeten jou trefwoorden in-->
        <meta name="keywords" content="Partybags, partybags, feesttassen, feest tas">
        <!--Hier moet je je css document in zetten-->
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
        <title>
            Home
        </title>
    </head>
    <body>
    <header>
        <h1 id="koptekst"><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
    </header>
    <aside>
        <h2>Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="hoofdtuk2/opdracht_2.1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>

    <div>
        <h1>Taak 2</h1>
        <?php
//        zin 1
        echo "<p>" . $text1 . $text3 . $text4 . $text2 . "</p>";

        // zin 2
        echo "<p>" . $text3 . $text6 . $text7 . "</p>";

        //zin 3
        echo "<p>" . $text5 . $text4 . $text2 . $text3 . "</p>";

        ?>
    </div>
        <div>
            <h1>Taak 3</h1>
            <?php
            //zin 1
            echo "<p>". $text1 . $text3 . $text4 . "," . $text8 . $text6 . $text2 . "? </p>";
            //zin 2
            echo "<p>" . $text7 . $text5 . $text4 . $text10 . $text2 . $text9 . "! </p>";
            ?>
        </div>
    </body>
</html>