<!DOCTYPE html>

<html lang="de">

<head>

    <meta charset="utf-8" />
    <meta author="Gruppe_8" />
    <title>Gruppe_8</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>

<body>

    <div class="header">
        <a href="index.php"><img src="images/rezeptbuch_logo-01.svg"></a>
    </div>
    <div class="row">
        <div class=" side_sb col-2 col-s-0">

        </div>
        <div class="searchbar col-7 col-s-12">
            <form class="row" action="Alle_Rezepte.php" method="POST">
                <input class="row col-12 col-s-12" type="text" name="search_text" id="search_text" placeholder="Suchen">
            </form>

        </div>
        <div class=" side_sb col-3 col-s-0">

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

        <div class="row col-7 col-s-9">
            <div class="content_b">

                <div id="result"></div>
            </div>
        </div>
        <div class="col-3 col-s-12">
            <div class="aside">
                <h2>WAS?</h2>
                <p>Eine Website zur Rezeptverwaltung, für das Optimale Kocherlebnis</p>
                <h2>WIE?</h2>
                <p>Einfach auf die Ensprechenden Buttons drücken und schon kann es los gehen</p>
            </div>
        </div>

    </div>


    <div class="footer">
            <p>FAKEITCompany© by Tost Maju Sori Arma      All Rights Recived</p>
        </div>

</body>

</html>

<script>
$(document).ready(function(){			//verändertes ajax script zum Abrufen der Datensatzdatenbank mit Ajax.
	load_data();				
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}

	$('#search_text').keyup(function(){	//mit keyupfunction abfragen was eingetippt wird
		var search = $(this).val();
		if(search != '')		//wenn suche ungleich leer abfrage der suche
		{
			load_data(search);
		}
		else				//dann load_data()
		{
			load_data();
		}
	});
});
</script>
