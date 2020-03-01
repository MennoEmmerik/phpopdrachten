<!--
Auteur:         Menno Emmerik
Aanmaakdatum:   25-2-2020
Bestandsnaam:   index.html
-->

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
                            <a href="hoofdtuk2/opdracht_2.1.php">Opdracht 2.1</a>
                        </li>
                        <li>
                            <a href="hoofdtuk2/opdracht_2.2.php">Opdracht 2.2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>

            <?php
            $trafficlight = "Groen";
            $ambulanceComing = false;
            $driveOn = true;

            if($trafficlight == "Groen" && $ambulanceComing == false)
            {
                $driveOn = true;
                echo "<p>U mag doorrijden</p>";
            }
            else
            {
                $driveOn = false;
                echo "<p>U moet stoppen</p>";
            }


            $countryName = "";
            $currentAge = 18;
            //begin if statement, checkt of het land België is
            if ($countryName == "België")
            {
                //if in if statement, checkt leeftijd
                if ($currentAge >= 18)
                {
                    echo "Je mag alle drank drinken";
                }
                else if ($currentAge >= 16)
                {
                    echo "Je mag alleen minder sterke drank drinken";
                }
                else
                {
                    echo "Je mag niets drinken";
                }
            }
            //controleert of het land Bulgarije of Nederland is
            else if ($countryName == "Bulgarije" || $countryName == "Nederland")
            {
                //checkt leeftijd
                if ($currentAge >= 18)
                {
                    echo "Je mag alle drank drinken";
                }
                else
                {
                    echo "Je mag niets drinken";
                }
            }
            //Controleert of het land Cyprus is
            elseif ($countryName == "Cyprus")
            {
                //checkt leeftijd
                if ($currentAge >= 17)
                {
                    echo "Je mag alle drank drinken";
                }
                else
                {
                    echo "Je mag niets drinken";
                }
            }
            //controleert of het land Zweden is
            elseif ($countryName == "Zweden")
            {
                //checkt leeftijd
                if ($currentAge >= 20)
                {
                    echo "Je mag alle drank drinken";
                }
                elseif ($currentAge >= 18)
                {
                    echo "Je mag alleen zwakke drank drinken";
                }
                else
                {
                    echo "Je mag niets drinken";
                }
            }
            //als er iets mis is met de benaming van het land wordt dit weergegeven
            else
            {
                echo "We weten niet in welk land jij woont";
            }
            ?>
        </main>
    </body>
</html>