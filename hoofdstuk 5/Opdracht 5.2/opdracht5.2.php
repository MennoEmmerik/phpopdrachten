<?php
//De includes voor de opmaak
include "../../includes/header.php";
include "../../includes/menu.php";
?>

<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <form action="uitschrijven.php" method="get">
        <table>
            <tr>
                <td>
                    Voor en achternaam
                </td>
                <td>
                    <input type="text" name="fullname">
                </td>
            </tr>
            <tr>
                <td>
                    Studentennummer
                </td>
                <td>
                    <input type="text" name="studentNumber">
                </td>
            </tr>
            <tr>
                <td>
                    Datum van uitschrijving
                </td>
                <td>
                    <input type="date" name="dateUnsubscribe">
                </td>
            </tr>
            <tr>
                <td>
                    Reden van uitschrijven
                </td>
                <td>
                    <select>
                        <option value="Verkeerde keuze" name="wrong">Verkeerde keuze</option>
                        <option value="Te moeilijk" name="diffecult">Te moeilijk</option>
                        <option value="Ik heb er geen zin" name="nonMotivaded">Ik heb er geen zin in</option>
                        <option value="Wil ik niet zeggen" name="noReason">Wil ik niet zeggen</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Leerjaar
                </td>
                <td>
                    <input type="radio" id="1e leerjaar" name="EducationYear" value="1e leerjaar">
                    <label for="EducationYear">1e leerjaar</label><br>
                    <input type="radio" id="2e leerjaar" name="EducationYear" value="2e leerjaar">
                    <label for="EducationYear">2e leerjaar</label><br>
                    <input type="radio" id="3e leerjaar" name="EducationYear" value="3e leerjaar">
                    <label for="3e leerjaar">3e leerjaar</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="succesClass" value="succesklas">
                    <label for="succesClass">Ik wil me aanmelden bij de succesklas</label><br>
                    <input type="checkbox" name="deleteData" value="DeleteData">
                    <label for="deleteData">Verwijder mijn gegevens uit het systeem</label><br>
                </td>
            </tr>
            <tr>
                <td>
                    Geef hier de reden van je uitschrijving op
                </td>
                <td>
                    <input type="text" name="reason">
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

<?php
include "../../includes/footer.php";
?>