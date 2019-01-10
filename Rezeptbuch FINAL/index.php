<!DOCTYPE html>

<html lang="de">

<head>

    <meta charset="utf-8" />
    <meta author="Gruppe_8" />
    <title>Gruppe_8</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>

<body>

    <div class="header">
        <a href="index.php"><img src="images/rezeptbuch_logo-01.svg"></a>
    </div>
      <div class="row_sb">
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

        <div class="row col-7 col-s-9">
            <div class="content_a col-12 col-s-12">
                <h1>Willkommen auf Rezepte.de</h1>
                <p>Dies ist eine kleine Lokale Webseite zur Verwaltung von Koch-, Back- und Grillrezepten. Sie können Rezepte aller Art hinzufügen, bearbeiten und oder entfernen, sowie diese Ausdrucken und die dazugehörigen Zutaten in einer Einkaufsliste speichen und diese ausdrucken</p>
                <img class="kochlust" src="images/kochlust.jpg">
            </div>
            <div class="content_b col-5 col-s-5">
                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua.</p>
            </div>
            <div class="content_c col-5 col-s-5">

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
$(document).ready(function(){
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

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
	});
});
</script>
