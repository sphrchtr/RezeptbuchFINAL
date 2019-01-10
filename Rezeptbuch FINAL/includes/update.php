<?php
/* Versucht MQSQL Verbindung. */
$link = mysqli_connect("localhost", "root", "", "rezeptbuch");                             // Neue Connection zur DB 
 
// Check connection
if($link === false){                                                                       // Mögliche Error Meldung falls ein Connection Error kommt 
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$namerecipe = mysqli_real_escape_string($link, $_REQUEST['namerecipe']);                   // Holt sich alle Werte aus der Tabelle und trägt sie in die Variablen ein
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

$id = $_GET['id'];

// Versucht update query


    

$sql = "UPDATE rezepte Set namerecipe ='" .$namerecipe . "',ingredient1 ='" . $ingredient1 . "',ingredient2 ='" . $ingredient2 . "',ingredient3 ='" . $ingredient3 . "',ingredient4 ='" . $ingredient4 . "',ingredient5 ='" . $ingredient5 . "',ingredient6 ='" . $ingredient6 . "',ingredient7 ='" . $ingredient7 . "',ingredient8 ='" . $ingredient8 . "',ingredient9 ='" . $ingredient9 . "',ingredient10 ='" . $ingredient10 . "', preparation ='" . $preparation . "', cathegory1 ='" . $cathegory1 . "', cathegory2 ='" . $cathegory2 . "', cathegory3 ='" . $cathegory3 . "', difficulty ='" . $difficulty . "',time ='" . $time . "', amount ='" .$amount . "', source ='" . $source . "' WHERE ID='" . $id . "'";
    
    

if(mysqli_query($link, $sql)){                                                   // Query mit Link und SQL
    header("Location:../Alle_Rezepte.php");                                      // Weiterleitung auf Alle_Rezepte.php
        exit;
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);        // Mögliche Fehlermeldung falls Daten nicht geupdatet werden konnten.
}

// Close connection
mysqli_close($link);                                                             // Link zu DB schließen
?>
