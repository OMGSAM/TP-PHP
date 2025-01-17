<form hx-post="add_rendezvous.php" hx-target="#confirmationMessage">
    <input type="date" name="date" required>
    <input type="time" name="heure" required>
    <input type="text" name="raison" placeholder="Raison" required>
    <select name="idPatient">
        <!-- Options des patients -->
    </select>
    <select name="matricule">
        <!-- Options des dentistes -->
    </select>
    <button type="submit">Planifier</button>
</form>
<div id="confirmationMessage"></div>
