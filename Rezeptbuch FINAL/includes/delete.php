<?php
$pdo = new PDO('mysql:host=localhost;dbname=rezeptbuch', 'root', '');               // Neue Verbindung zur Datenbank ( Idee von PHP-Einfach.de)
$id = $_GET['id'];                                                                  // Get Id aus Adress Zeile            
$statement = $pdo->prepare("DELETE FROM rezepte WHERE id = ?");                     // SQL wird mit der Id Variabel vervollständigt
$statement->execute(array($id));                                                    // Query wird ausgeführt
header("Location:../Alle_Rezepte.php");                                             // Weiterleitung zur Alle_Rezepte.php
    exit;
?>
