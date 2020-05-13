<?php
 session_start();
    if (isset($_SESSION['username']))
    {
        $bezoeker = $_SESSION['username'] . "&nbsp;<a href='../Hoofdstuk%206/Opdracht%206.1/loguit.php''>Loguit</a>";
    }
    else
    {
        $bezoeker = "onbekende bezoeker" . "&nbsp;<a href='../Hoofdstuk%206/Opdracht%206.1/checklogin.php'>Login</a>";
    }
    echo $bezoeker;
    ?>

<html>
    <body>
        <div>
            <h1>
                Gegroet!
            </h1>
            <p>
                Fijn dat u heeft kunnen inloggen!
            </p>
        </div>
