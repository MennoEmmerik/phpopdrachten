<?php
    //De includes voor de opmaak
    include "../../includes/header.php";
    include "../../includes/menu.php";
?>

<main id="wrapper">
    <h2>Uitwerkingen</h2>

    <h1>
        Restaria Kees Kroket
    </h1>
    <p> Visstraat 12<br>
        5211DN 'S-Hertogenbosch<br>
        073 613 6720<br>
        info@restariakeeskroket.nl
    </p>

    <form action="form_data.php" method="get">
        <table>
            <tr>
                <td>
                    Bedrijfsnaam
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" placeholder="Bedrijfsnaam" name="company">
                </td>
            </tr>
            <tr>
                <td>
                    Voornaam
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="firstname">
                </td>
            </tr>
            <tr>
                <td>
                    Achternaam
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="lastname">
                </td>
            </tr>
            <tr>
                <td>
                    Telefoon
                </td>
            </tr>
            <tr>
                <td>
                    <input type="tel" name="phonenumber">
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
            </tr>
            <tr>
                <td>
                    <input type="email" name="mailAdress">
                </td>
            </tr>
            <tr>
                <td>
                    Bericht
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="message">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Versturen">
                </td>
            </tr>
        </table>
    </form>
</main>



