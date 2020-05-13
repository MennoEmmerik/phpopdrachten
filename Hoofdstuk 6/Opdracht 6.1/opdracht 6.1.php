<?php

//Includes toevoegen
 include "../../includes/header.php";
 include "../../includes/menu.php";
 ?>

<main id="wrapper">
    <h2>Uitwerkingen</h2>

    <h2>
        Login formulier
    </h2>

    <form method="post" action="checklogin.php">
        <table>
            <tr>
                <td>
                    Gebruikersnaam
                </td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>
                    Wachtwoord
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td colspan="2">
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
</main>
