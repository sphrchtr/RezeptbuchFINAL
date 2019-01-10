<?php
    include_once 'includes/connect.php'
?>
    <!DOCTYPE html>

    <html lang="de">

    <head>

        <meta charset="utf-8" />
        <meta author="Gruppe_8" />
        <title>Gruppe_8</title>
        <link rel="stylesheet" type="text/css" href="style/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
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

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }    

                    $sql = "SELECT ID, Name FROM Einkaufsliste";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
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
                    <p>Klicken sie auf Drucken um die Einkaufsliste auszudrucken</p>
                </div>
            </div>
            <div class="row col-2 col-s-12">
                
            </div>
            <div class="row col-8 col-s-12">
                <button onclick="javascript:printDiv('printablediv')"><img class='icon' src='images/print.png'></button>
            </div>
        </div>


        <div class="footer">
            <p>FAKEITCompany© by Tost Maju Sori Arma      All Rights Recived</p>
        </div>

    </body>

    </html>
