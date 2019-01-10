<?php
$link = mysqli_connect("localhost", "root", "", "rezeptbuch");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ingredient = $_GET['ingredient'];
$id = $_GET['id'];

$sql = "INSERT INTO Einkaufsliste (Name) VALUES ('$ingredient')";

if(mysqli_query($link, $sql)){
    header("Location: ./view.php?id=$id");
}

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>