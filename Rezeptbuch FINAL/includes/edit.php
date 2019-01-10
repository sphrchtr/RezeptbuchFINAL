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
        <div class="row col-8 col-s-9">
    <?php
            $pdo = new PDO('mysql:host=localhost;dbname=rezeptbuch', 'root', '');

            $id = $_GET['id'];
            
            $sql = "SELECT * FROM rezepte WHERE id =" .$id ."";
                foreach ($pdo->query($sql) as $row) {
                echo "<form action='update.php?id=" . $row['ID'] . "' method ='post'>";
                echo  "<div class='col-3 col-s-12'>Rezept Name :<br><input type='text' name='namerecipe' id='namerecipe' value= '" . $row['namerecipe'] ."'><br>";
                echo  "Zutat 1 : <br><input type='text' name='ingredient1' id='ingredient1' value = '" . $row['ingredient1'] ."'><br>";
                echo  "Zutat 2 : <br><input type='text' name='ingredient2' id='ingredient2' value = '" . $row['ingredient2'] ."'><br>";
                echo  "Zutat 3 : <br><input type='text' name='ingredient3' id='ingredient3' value = '" . $row['ingredient3'] ."'><br>";
                echo  "Zutat 4 : <br><input type='text' name='ingredient4' id='ingredient4' value = '" . $row['ingredient4'] ."'><br>";
                echo  "Zutat 5 : <br><input type='text' name='ingredient5' id='ingredient5' value = '" . $row['ingredient5'] ."'><br></div>";
                echo  "<div class='col-3 col-s-12'>Zutat 6 : <br><input type='text' name='ingredient6' id='ingredient6' value = '" . $row['ingredient6'] ."'><br>";
                echo  "Zutat 7 : <br><input type='text' name='ingredient7' id='ingredient7' value = '" . $row['ingredient7'] ."'><br>";
                echo  "Zutat 8 : <br><input type='text' name='ingredient8' id='ingredient8' value = '" . $row['ingredient8'] ."'><br>";
                echo  "Zutat 9 : <br><input type='text' name='ingredient9' id='ingredient9' value = '" . $row['ingredient9'] ."'><br>";
                echo  "Zutat 10 : <br><input type='text' name='ingredient10' id='ingredient10' value = '" . $row['ingredient10'] ."'><br></div>";    
                echo  "<div class='col-3 col-s-12'>Zubereitung : <br><input type='text' name='preparation' id='preparation' value = '" . $row['preparation'] ."'><br>";
                echo  "Kategorie 1 : <br><input type='text' name='cathegory1' id='cathegory' pvalue = '" . $row['cathegory1'] ."'><br>"; 
                echo  "Kategorie 2 : <br><input type='text' name='cathegory2' id='cathegory' value = '" . $row['cathegory2'] ."'><br>";
                echo  "Kategorie 3 : <br><input type='text' name='cathegory3' id='cathegory' value = '" . $row['cathegory3'] ."'><br></div>";
                echo  "Schwierigkeitsgrad <br><input type='text' name='difficulty' id='difficulty' value = '" . $row['difficulty'] ."'><br>"; 
                echo  "<div class='col-3 col-s-12'>Zeit : <br><input type='text' name='time' id='time' value = '" . $row['time'] ."'><br>";
                echo  "Anzahl : <br><input type='text' name='amount' id='amount' value = '" . $row['amount'] ."'><br>";
                echo  "Quelle : <br><input type='text' name='source' id='source' value = '" . $row['source'] ."'><br></div>";
                }
            echo  "<button type='submit'><img class='icon' src='../images/save.png'></button>";
            echo  "</form>";
    ?>
            </div>
        <div class="row col-2 col-s-9">
                <div class="aside">
                    <h2>!HINWEIS!</h2>
                    <p>Hier Können sie Ihre vorhanden Rezepte nach Ihren wünschen neu gestalten oder nchträglich verändern </p>
                    

                </div>
        </div>
    </div>

    <div class="footer">
            <p>FAKEITCompany© by Tost Maju Sori Arma      All Rights Recived</p>
        </div>

</body>

</html>