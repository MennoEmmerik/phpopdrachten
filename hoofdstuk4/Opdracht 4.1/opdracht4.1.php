<!--
Auteur:         Menno Emmerik
Aanmaakdatum:   9-3-2020
Bestandsnaam:   opdrachten4.1.php
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
    <link rel="stylesheet" type="text/css" href="./CSS/style.css">
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
        <li>
            Hoofdstuk 3
        </li>
        <ul>
            <<li>
                <a href="hoofdstuk3/Opdracht3.1/Opdracht3.1.php">Opdracht 3.1</a>
            </li>
            <li>
                <a href="hoofdstuk3">Opdracht 3.2</a>
            </li>
        </ul>
        </li>
    </ul>
</aside>
<?php
//includes van de pagina
include "../includes/header.php";
?>
<main id="wrapper">
    <?php
    include "../includes/menu.php";
    include "./hoofdstuk3/variabelen.php";
    ?>
</main>

<?php
include "../includes/footer.php";
?>
</body>
</html>