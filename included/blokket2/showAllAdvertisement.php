<?php 
	$path = dirname(__FILE__)."/data/";
	$table ="<tr>
				<th>Annons</th>
				<th>Bild:</th>
				<th>Text</th>
			</tr>";
	$db = new PDO("sqlite:$dbPath");
	
	$stmt = $db->prepare("SELECT * FROM Advertisement;");
	$stmt->execute();
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

	
	foreach ($res as $advertisement) {
		$table .= "<tr>";
		$table .= "<td>{$advertisement['title']}</td>";
		$table .= "<td><img src='{$advertisement['img']}' alt='annons bild' class='tableImg'></td>";
		$table .= "<td>{$advertisement['description']}</td>";
		$table .= "</tr>";
	}
?>

<h1>Alla annonser</h1>
<div>
	<fieldset>
		<p>
			<br>
			<table id="advertisementTable">
				<?php 
					echo $table;
				?>
			</table>
			<br>
		</p>
	</fieldset>
</div>