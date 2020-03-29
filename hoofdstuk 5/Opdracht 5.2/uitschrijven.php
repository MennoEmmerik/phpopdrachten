<?php

?>

<table>
    <tr>
        <td>Voor en achternaam:</td>
        <td><?php echo $_GET["fullname"] ?></td>
    </tr>
    <tr>
        <td>Studentennummer:</td>
        <td><?php echo $_GET["studentNumber"] ?></td>
    </tr>
    <tr>
        <td>Uitschrijfdatum:</td>
        <td><?php echo $_GET["dateUnsubscribe"] ?></td>
    </tr>
    <tr>
        <td>Uitschrijfreden:</td>
        <td><?php echo $_GET["unsubscribeReason"] ?></td>
    </tr>
    <tr>
        <td>Leerjaar</td>
        <td><?php echo $_GET["EducationYear"] ?></td>
    </tr>
    <tr>
        <td>Succesklas:</td>
        <td><?php echo $_GET["succesClass"] ?></td>
    </tr>
    <tr>
        <td>Verwijderen van gegevens:</td>
        <td><?php echo $_GET["deleteData"] ?></td>
    </tr>
    <tr>
        <td>Reden van uitschrijving:</td>
        <td><?php echo $_GET["reason"] ?></td>
    </tr>
</table>
