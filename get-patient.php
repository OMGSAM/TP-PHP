 <?php
$pdo = new PDO('mysql:host=localhost;dbname=cabinet_dentaire', 'root', 'password');
$query = $pdo->query("SELECT * FROM Patients WHERE actif = 1");
$patients = $query->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
echo json_encode($patients);
?>
