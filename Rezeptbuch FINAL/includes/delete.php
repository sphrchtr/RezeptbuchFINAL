<?php
$pdo = new PDO('mysql:host=localhost;dbname=rezeptbuch', 'root', '');
$id = $_GET['id'];
$statement = $pdo->prepare("DELETE FROM rezepte WHERE id = ?");
$statement->execute(array($id));
header("Location:../Alle_Rezepte.php");
    exit;
?>
