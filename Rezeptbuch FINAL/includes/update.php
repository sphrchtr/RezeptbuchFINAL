<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "rezeptbuch");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$namerecipe = mysqli_real_escape_string($link, $_REQUEST['namerecipe']);
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

// Attempt insert query execution

/*$sql = "UPDATE rezepte Set namerecipe =" .$namerecipe .",ingredient1 =" . $ingredient1 . ",ingredient2 =" . $ingredient2 . ",ingredient3 =" . $ingredient3 . ",ingredient4 =" . $ingredient4 . ",ingredient5 =" . $ingredient5 . ",ingredient6 =" . $ingredient6 . ",ingredient7 =" . $ingredient7 . ",ingredient8 =" . $ingredient8 . ",ingredient9 =" . $ingredient9 . ",ingredient10 =" . $ingredient10 . ", preparation =" . $preparation . ", cathegory1 =" . $cathegory1 . ", cathegory2 = " . $cathegory2 . ", cathegory3 = " . $cathegory3 . ", difficulty = " . $difficulty . ",time = " . $time . ", amount = " .$amount . ", source =" . $source . " WHERE ID=" . $id ."";  */
    

$sql = "UPDATE rezepte Set namerecipe ='" .$namerecipe . "',ingredient1 ='" . $ingredient1 . "',ingredient2 ='" . $ingredient2 . "',ingredient3 ='" . $ingredient3 . "',ingredient4 ='" . $ingredient4 . "',ingredient5 ='" . $ingredient5 . "',ingredient6 ='" . $ingredient6 . "',ingredient7 ='" . $ingredient7 . "',ingredient8 ='" . $ingredient8 . "',ingredient9 ='" . $ingredient9 . "',ingredient10 ='" . $ingredient10 . "', preparation ='" . $preparation . "', cathegory1 ='" . $cathegory1 . "', cathegory2 ='" . $cathegory2 . "', cathegory3 ='" . $cathegory3 . "', difficulty ='" . $difficulty . "',time ='" . $time . "', amount ='" .$amount . "', source ='" . $source . "' WHERE ID='" . $id . "'";
    
    
/*$sql = "INSERT INTO rezepte (namerecipe, ingredient1 , ingredient2 , ingredient3 , ingredient4 , ingredient5 , ingredient6 , ingredient7 , ingredient8 , ingredient9 , ingredient10 , preparation, cathegory1 , cathegory2 , cathegory3 , difficulty, time , amount ,  source ) VALUES ('$namerecipe','$ingredient1','$ingredient2','$ingredient3','$ingredient4','$ingredient5','$ingredient6','$ingredient7','$ingredient8','$ingredient9','$ingredient10','$preparation', '$cathegory1','$cathegory2','$cathegory3','$difficulty','$time','$amount', '$source') WHERE ID= .$id  . "; */
if(mysqli_query($link, $sql)){
    header("Location:../Alle_Rezepte.php");
        exit;
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>