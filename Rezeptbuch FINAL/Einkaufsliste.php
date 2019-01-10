<?php
    include_once 'includes/connect.php' 
?>
    <!DOCTYPE html>

    <html lang="de">

    <head>

        <meta charset="utf-8" /> <!-- Kodierung für Unicode-Zeichen -->
        <meta author="Gruppe_8" />
        <title>Gruppe_8</title>
        <link rel="stylesheet" type="text/css" href="style/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script language="javascript" type="text/javascript"> // Script um bestimmtes div zu drucken
        function printDiv(divID) {
            // Holt die HTML von div
            var divElements = document.getElementById(divID).innerHTML;
            
            // Holt die HTML der ganzen Seite
            var oldPage = document.body.innerHTML;

            // Ersetzt die ganze HTML Seite mit der div
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            // Seit drucken
            window.print();

            // Original HTML wiederhestellen
            document.body.innerHTML = oldPage;

          
        }
    </script>
    </head>

    <body>

        <div class="header">
            <a href="./index.php"><img src="images/rezeptbuch_logo-01.svg"></a> 
        </div>
        <div class="row">
            <div class=" side_sb col-12 col-s-9">

            </div>
        </div>
        <div class="row">
            <div class="col-2 col-s-3 menu"> 
                <ul>
                    <li onclick="location.href='./Rezeptform.php'">
                        <a>Rezepte hinzufügen</a>
                    </li>

                    <li onclick="location.href='./Alle_Rezepte.php'">
                        <a>Alle Rezepte</a>
                    </li>
                    <li onclick="location.href='./Einkaufsliste.php'">
                        <a>Einkaufsliste</a>
                    </li>
                    <li onclick="location.href='./Impressum.php'">
                        <a>Impressum</a>
                    </li>
                </ul>
            </div>
            <!--- row col-7 col-s-9-->
            <div class="row col-8 col-s-12 content_b" id="printablediv">
                <h2>Auf der Einkaufsliste stehen folgende Dinge:</h2>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "rezeptbuch";

                    // Verbingung wird hergestellt
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Verbindung wird überprüft
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }    

                    $sql = "SELECT ID, Name FROM Einkaufsliste";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Augabe der Daten pro Zeile
                        while($row = $result->fetch_assoc()) {
                            echo "<br>- ". $row['Name']. "<br>";
                        }
                        echo "<br>    ";
                    } 
                    else {
                        echo "0 Ergebnisse";
                    }

                    $conn->close();
                ?>
            </div>   
            <div class="row col-2 col-s-8">
                <div class="aside">
                    <h2>!HINWEIS!</h2>
                    <p>Hier können sie alle Dinge auf Ihrer Einkaufsliste sehen</p>
                    <p>Klicken Sie auf "Drucken" um die Einkaufsliste auszudrucken</p>
                </div>
            </div>
            <div class="row col-2 col-s-12">
                
            </div>
            <div class="row col-8 col-s-12">
                <button onclick="javascript:printDiv('printablediv')"><img class='icon' src='images/print.png'></button> <!-- Druck Button -->
            </div>
        </div>


        <div class="footer">
            <p>FAKEITCompany© by Tost Maju Sori Arma      All Rights Recived</p>
        </div>

    </body>

    </html>
