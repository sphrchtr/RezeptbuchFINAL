<?php
$link = mysqli_connect('localhost', 'root', '');                                            // Neue verbindung zur Datenbank
if (!$link) {                                                                               // Mögliche Fehlermeldung falls Verbindung abbricht 
    die('Could not connect: ' . mysql_error());                                             // Error
}
mysqli_close($link);                                                                        // Verbindung close
?>
