<?php

?>

<table>
    <tr>
        <td>
            Bedrijfsnaam:
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $_GET["company"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Voornaam:
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $_GET["firstname"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Achternaam:
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $_GET["lastname"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Telefoon:
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $_GET["phonenumber"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Email:
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $_GET["mailAdress"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Bericht:
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $_GET["message"];
            ?>
        </td>
    </tr>
</table>
