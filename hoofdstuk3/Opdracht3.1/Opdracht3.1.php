<!--
Auteur:         Menno Emmerik
Aanmaakdatum:   19-2-2020 + 10:56
Bestandsnaam:   Opdracht3.1.php
-->

<!DOCTYPE html>

<html>
<head>
    <!--Letterypen set voor de Europeanen-->
    <meta charset="utf-8">
    <!--Beshrijving van de website-->
    <meta name="description" content="">
    <!--Hier moeten jou trefwoorden in-->
    <meta name="keywords" content="">
    <!--Hier moet je je css document in zetten-->
    <link rel="stylesheet" type="text/css" href="../../CSS/style.css">
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
                            <a href="../../hoofdstuk2/opdracht_2.1.php">Opdracht 2.1</a>
                        </li>
                        <li>
                            <a href="../../hoofdstuk2/opdracht_2.1.php">Opdracht 2.2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <?php
            // Het schrijven van de variabelen
            $iceSkatingName = "Elfstedentocht";
            $roadFries = "Alvestêdetocht";
            $distance = 200;
            $kind = "schaatstocht";
            $ice = "natuurijs";
            $organiser = "Koningklijke vereniging De Friesche Elf Steden";
            $place = "Leeuwarden";
            $province = "Friesland";
            $timesRidden = 15;
            $firstTime = 1909;
            $maxInYear = 1;

            //Ik heb het verhaal in een variabele gestopt.
            $verhaal = "De ".$iceSkatingName." (Fries: ".$roadFries.") is een ".$distance." kilometer lange ".$kind." over ".$ice." die wordt georganiseerd door de ".$organiser.". ".$place.", de hoofdstad van ".$province.", is start- en aankomstplaats. De ".$iceSkatingName." is inmiddels ".$timesRidden." maal verreden en werd voor het eerst in ".$firstTime." gereden en wordt maximaal ".$maxInYear." keer per winter gehouden.";
            echo "<p>".$verhaal."</p>";
            ?>
        </main>
    </body>
</html>