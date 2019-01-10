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
.icon{
    width:auto;
    height:auto;
}
</style>

<?php
$connect = mysqli_connect("localhost", "root", "", "rezeptbuch");			//Teil des Externen Ajax such Scriptes
$output = '';										//gibt Daten aus der datenbank aus
if(isset($_POST["query"]))								//abfrage via php aus sql datenbank fragt nach id,name kategorien, quelle
{											//sowie zeit und schwierigkeitsgrad geordent nach id
	$search = mysqli_real_escape_string($connect, $_POST["query"]);			//und ist das resultat größer 0 gibt es in einer Tabelle die Daten der datenbank aus
	$query = "									//und wenn kleiner null dann Keine einträge gefunden
	SELECT * FROM rezepte
	WHERE id LIKE '%".$search."%'
	OR namerecipe LIKE '%".$search."%'
	OR cathegory1 LIKE '%".$search."%'
	OR cathegory2 LIKE '%".$search."%'
	OR cathegory3 LIKE '%".$search."%'
	OR source LIKE '%".$search."%'
	OR time LIKE '%".$search."%'
	OR difficulty LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM rezepte ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="">
					<table class="">
						<tr>
							<th>Name</th>
							<th>Kategorie1</th>
							<th>Kategorie2</th>
							<th>Kategorie3</th>
							<th>Zeit</th>
							<th>Schwierigkeitsgrad</th>
							<th>Quelle</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["namerecipe"].'</td>
				<td>'.$row["cathegory1"].'</td>
				<td>'.$row["cathegory2"].'</td>
				<td>'.$row["cathegory3"].'</td>
				<td>'.$row["time"].'</td>
				<td>'.$row["difficulty"].'</td>
				<td>'.$row["source"].'</td>
                		<td><a href="includes/view.php?id='.$row["ID"].'"><img class="icon" src="images/view.png"></a></td>
               	 		<td><a href="includes/edit.php?id='. $row["ID"].'"><img class="icon" src="images/edit.png"></a></td>
                		<td><a href="includes/delete.php?id='. $row["ID"].'"><img class="icon" src="images/delete.png"></a></td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Keine Eintrage gefunden';
}
?>
