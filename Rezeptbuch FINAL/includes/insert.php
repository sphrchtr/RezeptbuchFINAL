<?php
/* Versucht MQSQL Verbindung. */
$link = mysqli_connect("localhost", "root", "", "rezeptbuch");                                       // Neue Connection zur DB
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());                                     // Mögliche Error Meldung falls ein Connection Error kommt
}
 

$namerecipe = mysqli_real_escape_string($link, $_REQUEST['namerecipe']);                            // Holt sich alle Werte aus der Tabelle und trägt sie in die Variablen ein
$preparation = mysqli_real_escape_string($link, $_REQUEST['preparation']);
$difficulty = mysqli_real_escape_string($link, $_REQUEST['difficulty']);
$ingredient1 =  mysqli_real_escape_string($link, $_REQUEST['ingredient1']);
$ingredient2 =  mysqli_real_escape_string($link, $_REQUEST['ingredient2']);
$ingredient3 =  mysqli_real_escape_string($link, $_REQUEST['ingredient3']);
$ingredient4 =  mysqli_real_escape_string($link, $_REQUEST['ingredient4']);
$ingredient5 =  mysqli_real_escape_string($link, $_REQUEST['ingredient5']);
$ingredient6 =  mysqli_real_escape_string($link, $_REQUEST['ingredient6']);
$ingredient7 =  mysqli_real_escape_string($link, $_REQUEST['ingredient7']);
$ingredient8 =  mysqli_real_escape_string($link, $_REQUEST['ingredient8']);
$ingredient9 =  mysqli_real_escape_string($link, $_REQUEST['ingredient9']);
$ingredient10 =  mysqli_real_escape_string($link, $_REQUEST['ingredient10']);
$cathegory1 = mysqli_real_escape_string($link, $_REQUEST['cathegory1']);
$cathegory2 = mysqli_real_escape_string($link, $_REQUEST['cathegory2']);
$cathegory3 = mysqli_real_escape_string($link, $_REQUEST['cathegory3']);
$time = mysqli_real_escape_string($link, $_REQUEST['time']);
$amount = mysqli_real_escape_string($link, $_REQUEST['amount']);
$source = mysqli_real_escape_string($link, $_REQUEST['source']);
 
// Versucht Insert Query
$sql = "INSERT INTO rezepte (namerecipe, ingredient1 , ingredient2 , ingredient3 , ingredient4 , ingredient5 , ingredient6 , ingredient7 , ingredient8 , ingredient9 , ingredient10 , preparation, cathegory1 , cathegory2 , cathegory3 , difficulty, time , amount ,  source ) VALUES ('$namerecipe','$ingredient1','$ingredient2','$ingredient3','$ingredient4','$ingredient5','$ingredient6','$ingredient7','$ingredient8','$ingredient9','$ingredient10','$preparation', '$cathegory1','$cathegory2','$cathegory3','$difficulty','$time','$amount', '$source')";
if(mysqli_query($link, $sql)){                                                                      // Query mit Link und SQL
 /*   header("Location:../Rezeptform.php");
        exit; */
    $location = "../Rezeptform.php";                                                                // Variable wird festgelgt
    header("Location: $location?message=success");                                                  // Weiterleitung auf Alle_Rezepte.php
if(!empty($_GET['message'])) {                                                                      // Wenn Message leer dann
    $message = $_GET['message'];                                                                    // Message aus Adress Zeile bekommen
} 
else{                         
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);                           // Mögliche Fehlermeldung falls Daten nicht geupdatet werden konnten.
}
}
// Close connection
mysqli_close($link);                                                                                // Link zu DB schließen
?>
