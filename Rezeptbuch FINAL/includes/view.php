<!DOCTYPE html>

<html lang="de">

<head>

    <meta charset="utf-8" />
    <meta author="Gruppe_8" />
    <title>Gruppe_8</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color:#f5f5f5;
        }
    </style>
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
        <a href="../index.php"><img src="../images/rezeptbuch_logo-01.svg"></a>
    </div>
    <div class="row">
        <div class=" side_sb col-12 col-s-9">

        </div>
        
    </div>
    <div class="row">
        <div class="col-2 col-s-3 menu">
            <ul>
            <li onclick="location.href='../Rezeptform.php'">
                <a>Rezepte hinzufügen</a>
            </li>
            
            <li onclick="location.href='../Alle_Rezepte.php'">
                <a>Alle Rezepte</a>
            </li>
            <li onclick="location.href='../Einkaufsliste.php'">
                <a>Einkaufsliste</a>
            </li>
            <li onclick="location.href='../Impressum.php'">
                <a>Impressum</a>
            </li>
        </ul>
        </div>
        <!--- row col-7 col-s-9-->
        <div class="row col-8 col-s-12" id="printablediv">
        <?php
                $pdo = new PDO('mysql:host=localhost;dbname=rezeptbuch', 'root', '');
                $id = $_GET['id'];

                echo "<table>";
                $sql = "SELECT * FROM rezepte WHERE id =".$id ."";
                    foreach ($pdo->query($sql) as $row) {
                    echo  "<tr><th>Rezept Name : </th><th>" . $row['namerecipe'] ."</th></tr>";
                    echo  "<tr><th>Zutat 1 : </th><th><a href='./ek.php?ingredient=". $row['ingredient1'] ."&id=$id'>" . $row['ingredient1'] ."</th></tr>";
                    echo  "<tr><th>Zutat 2 : </th><th><a href='./ek.php?ingredient=". $row['ingredient2'] ."&id=$id'>" . $row['ingredient2'] ."</th></tr>";
                    echo  "<tr><th>Zutat 3 : </th><th><a href='./ek.php?ingredient=". $row['ingredient3'] ."&id=$id'>" . $row['ingredient3'] ."</th></tr>";
                    echo  "<tr><th>Zutat 4 : </th><th><a href='./ek.php?ingredient=". $row['ingredient4'] ."&id=$id'>" . $row['ingredient4'] ."</th></tr>";
                    echo  "<tr><th>Zutat 5 : </th><th><a href='./ek.php?ingredient=". $row['ingredient5'] ."&id=$id'>" . $row['ingredient5'] ."</th></tr>";
                    echo  "<tr><th>Zutat 6 : </th><th><a href='./ek.php?ingredient=". $row['ingredient6'] ."&id=$id'>" . $row['ingredient6'] ."</th></tr>";
                    echo  "<tr><th>Zutat 7 : </th><th><a href='./ek.php?ingredient=". $row['ingredient7'] ."&id=$id'>" . $row['ingredient7'] ."</th></tr>";
                    echo  "<tr><th>Zutat 8 : </th><th><a href='./ek.php?ingredient=". $row['ingredient8'] ."&id=$id'>" . $row['ingredient8'] ."</th></tr>";
                    echo  "<tr><th>Zutat 9 : </th><th><a href='./ek.php?ingredient=". $row['ingredient9'] ."&id=$id'>" . $row['ingredient9'] ."</th></tr>";
                    echo  "<tr><th>Zutat 10 : </th><th><a href='./ek.php?ingredient=". $row['ingredient10'] ."&id=$id'>" . $row['ingredient10'] ."</th></tr>";    
                    echo  "<tr><th>Zubereitung : </th><th>" . $row['preparation'] ."</th></tr>";
                    echo  "<tr><th>Schwierigkeitsgrad : </th><th>" . $row['difficulty'] ."</th></tr>"; 
                    echo  "<tr><th>Zeit : </th><th>" . $row['time'] ."</th></tr>";
                    echo  "<tr><th>Anzahl : </th><th>" . $row['amount'] ."</th></tr>";
                    }
                    echo "</table>";
            echo "<br>";
            echo "<br>";
            echo "<a href='.././Alle_Rezepte.php'><img class='icon' src='../images/back.png'></a>";    
        ?>
        </div>
            
        <div class="row col-2 col-s-9">
                <div class="aside">
                    <h2>TEXT</h2>
                    <p>Art got a big Dick </p>
                </div>
        </div>
        <div class="row col-8 col-s-12">
                
        </div>
        <div class="row col-4 col-s-12">
                <button onclick="javascript:printDiv('printablediv')"><img class='icon' src='../images/print.png'></button>
            </div>
    </div>

    <div class="footer">
            <p>FAKEITCompany© by Tost Maju Sori Arma      All Rights Recived</p>
        </div>

</body>

</html>