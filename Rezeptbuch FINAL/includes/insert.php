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
 
// Attempt insert query execution
$sql = "INSERT INTO rezepte (namerecipe, ingredient1 , ingredient2 , ingredient3 , ingredient4 , ingredient5 , ingredient6 , ingredient7 , ingredient8 , ingredient9 , ingredient10 , preparation, cathegory1 , cathegory2 , cathegory3 , difficulty, time , amount ,  source ) VALUES ('$namerecipe','$ingredient1','$ingredient2','$ingredient3','$ingredient4','$ingredient5','$ingredient6','$ingredient7','$ingredient8','$ingredient9','$ingredient10','$preparation', '$cathegory1','$cathegory2','$cathegory3','$difficulty','$time','$amount', '$source')";
if(mysqli_query($link, $sql)){
 /*   header("Location:../Rezeptform.php");
        exit; */
    $location = "../Rezeptform.php";
    header("Location: $location?message=success");
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
// Close connection
mysqli_close($link);
?>