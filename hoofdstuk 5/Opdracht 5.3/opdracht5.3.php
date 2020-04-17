<?php
    //De includes voor de opmaak
    include "../../includes/header.php";
    include "../../includes/menu.php";
?>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <form method="post" action="form_data53.php">
        <table>
            <tr>
                <th>
                    Corona enquete
                </th>
            </tr>
            <tr>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    Wat is je naam:
                </td>
                <td>
                    <input type="text" name="infected">
                </td>
            </tr>
            <tr>
                <td>
                    Wat is je leeftijd:
                </td>
                <td>
                    <input type="text" name="age">
                </td>
            </tr>
            <tr>
                <td>
                    Wat is je gemeente?
                </td>
                <td>
                    <select>
                        <option value="Breda">Breda</option>
                        <option value="Den Bosch">Den Bosch</option>
                        <option value="Uden">Uden</option>
                        <option value="Tiel">Tiel</option>
                        <option value="Meteren">Meteren</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Aantal inwoners gemeente:
                </td>
                <td>
                    <input type="text" name="citizens">
                </td>
            </tr>
            <tr>
                <td>
                    Ken jij mensen die besmet zijn in je woonplaats?
                </td>
                <td>
                    <input type="radio" name="awnser" value="Yes">Yes
                    <input type="radio" name="awnser" value="No">No
                </td>
            </tr>
            <tr>
                <td>
                    Aantal mensen besmet in je gemeente?*
                </td>
                <td>
                    <input type="text" name="infected">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button>
                        Verzenden
                    </button>
                </td>
            </tr>
        </table>
        </form>
    </main>

<?php
    include "../../includes/footer.php";
?>