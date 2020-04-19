<?php
//Toevoegen van html sturctuur
include "../includes/header.php";

//Error message
$message = "";

//login pagina moet worden weergegeven
$showLoginScreen = true;

// script.php wordt alleen geladen als er iets wordt verstuurt door het form.
if(isset($_POST["username"]) || isset($_POST["password"])) {
    include "script.php";
}

?>
<head>
    <link href="eindopdracht.css" type="text/css" rel="stylesheet">
</head>

<?php
    if($showLoginScreen == "true")
    {

?>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <h1>
                Bergheen
            </h1>
            <p>
                Login om onze adresgegevens + openingstijden te zien
            </p>
            <!--Formulier aan maken-->
            <form action="login.php" method="post">
                <table>
                    <tr>
                        <td id="error">
                            <?php
                            echo $message
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            username
                        </td>
                        <td>
                            <input type="text" name="username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            password
                        </td>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">
                            <input type="submit" value="Login">
                        </td>
                    </tr>
                </table>
            </form>
        </main>
<?php
    }
    else
    {
?>
<!--Als de login goed is dan moet deze HTML code worden weergegeven-->
        <h1>
            Bergheen
        </h1>
        <h3>
            Welkom!
        </h3>
        <fieldset>
            <legend>Openingstijden</legend>
            <table>
                <tr>
                    <td>
                        Do:
                    </td>
                    <td>
                        22:00
                    </td>
                </tr>
                <tr>
                    <td>
                        Vr:
                    </td>
                    <td>
                        All day
                    </td>
                </tr>
                <tr>
                    <td>
                        Za:
                    </td>
                    <td>
                        All day
                    </td>
                </tr>
                <tr>
                    <td>
                        Zo:
                    </td>
                    <td>
                        12:00
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>
                Adresgegevens
            </legend>
            <p>
                Am Wriezener Bahnhof
            </p>
            <p>
                10243 Berlin
            </p>
            <p>
                Deutschland
            </p>
        </fieldset>
<?php
    }
    ?>