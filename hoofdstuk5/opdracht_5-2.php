<h1>Uitschrijfformulier KW1C</h1>
<hr>
<form action="uitschrijving.php" method="get">
    <table>
        <tr>
            <td>Voor en achternaam</td>
            <td><input type="text" name="fullName"></td>
        </tr>
        <tr>
            <td>Studentennummer</td>
            <td><input type="number" name="studentNumber"></td>
        </tr>
        <tr>
            <td>Datum van uitschrijving</td>
            <td><input type="date" name="date"></td>
        </tr>
        <tr>
            <td>Reden van uitschrijven</td>
            <td>
                <select name="reason">
                    <option value="Verkeerde keuze">Verkeerde keuze</option>
                    <option value="Saaie lessen">Saaie lessen</option>
                    <option value="Slechte docent">Slechte docent</option>
                    <option value="Stom onderwerp">Stom onderwerp</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Leerjaar</td>
            <td>
                <input type="radio" name="year" value="1e leerjaar">1e leerjaar<br>
                <input type="radio" name="year" value="2e leerjaar">2e leerjaar<br>
                <input type="radio" name="year" value="3e leerjaar">3e leerjaar
            </td>
        </tr>
    </table>
    <input type="checkbox" name="apply" value="Ja">Ik wil me aanmelden bij de succesklas<br>
    <input type="checkbox" name="delete" value="Ja">Ik wil mijn gegevens uit het systeem<br>
    <p>Geef hieronder de reden van je uitschrijving op</p>
    <textarea name="description"></textarea><br>
    <input type="submit" value="Versturen">
</form>