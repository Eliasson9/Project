<?php 
	$path = dirname(__FILE__)."/data/";
	$files = readDirectory($path);
	$table ="<tr>
				<th>Annons</th>
				<th>Text</th>
			</tr>";
	$filename = null;
	
	
	foreach ($files as $advertisement) {
		$res = getFileContents($path.$advertisement);
		$table .= "<tr>";
		$table .= "<td>{$advertisement}</td>";
		$table .= "<td>{$res}</td>";
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