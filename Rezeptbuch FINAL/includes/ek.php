<?php 
$link = mysqli_connect("localhost", "root", "", "rezeptbuch"); // Verbingung zur Datenbank mit Benutzerdaten ( Idee von PHP-einfach.de)
 
// Verbindung wird geprüft mit Fehlermeldung
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ingredient = $_GET['ingredient']; //Werte (ingredient, id) werden von view.php übergegeben 
$id = $_GET['id'];

$sql = "INSERT INTO Einkaufsliste (Name) VALUES ('$ingredient')"; //Werte werden in Datenbank "einkaufsliste" eingefügt

if(mysqli_query($link, $sql)){
    header("Location: ./view.php?id=$id"); //Weiterleitung zur view.php
}

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
