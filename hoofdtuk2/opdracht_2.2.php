<!--
Auteur:         Menno Emmerik
Aanmaakdatum:   19-09-2019 + 10:56
Bestandsnaam:   opdracht_2.2.php
-->

<?php
    $text1 = "Hallo";
    $text2 = "een makkelijke taal";
    $text3 = "toch zo'n makkelijke taal";
    $text4 = "wat is ";
    $text5 = "PHP ";
    $text6 = "nooit gedacht dat ";
    $text7 = "de installatie is best ingewikkeld ";
    $text8 = "fijn ";
    $text9 = ".";
    $text10 = ", ";
    $text11 = "<br>";
    $text12 = "is ";
    $text13 = "Vind je niet ";
    $text14 = "?";

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
            Opdracht 2.2
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
        echo "<p>" . $text1 . $text10 . $text4 . $text5 . $text2 . "</p>";

        // zin 2
        echo "<p>" . $text7 . $text9 . $text8 . "toch?" . "</p>";

        //zin 3
        echo "<p>" . $text6 . $text5 . $text3 . $text12 . $text9 . "</p>";

        ?>
    </div>
        <div>
            <h1>Taak 3</h1>
            <?php
            //zin 1
            echo "<p>". $text1 . $text10 . $text11 . $text8 . "toch dat " . $text5 . $text3 . $text12 . $text9 . "</p>";
            //zin 2
            echo "<p>" . $text7 . $text13 . $text14 .  "</p>";
            ?>
        </div>
    </body>
</html>