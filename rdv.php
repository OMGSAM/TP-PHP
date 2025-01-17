
<?php
$pdo = new PDO('mysql:host=localhost;dbname=cabinet_dentaire', 'root', 'password');
$stmt = $pdo->prepare("INSERT INTO RendezVous (date, heure, raison, statut, idPatient, matricule) VALUES (?, ?, ?, 'en attente', ?, ?)");
$stmt->execute([$_POST['date'], $_POST['heure'], $_POST['raison'], $_POST['idPatient'], $_POST['matricule']]);
echo "Rendez-vous planifié avec succès !";
?>
