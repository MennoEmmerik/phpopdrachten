<!--
Auteur:         Menno Emmerik
Aanmaakdatum:   28-2-2020
Bestandsnaam:   opdracht3.3.html
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
        <main id="wrapper">
            <?php
            //includes van de pagina
            include "../../includes/header.php";
            include "../../includes/menu.php";
            include "./hoofdstuk3/variabelen.php";
            ?>
        <footer>
            <?php
            include "../../includes/footer.php";
            ?>

        </footer>
        </main>
    </body>
</html>