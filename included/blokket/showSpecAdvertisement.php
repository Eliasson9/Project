<?php 
	$path = dirname(__FILE__)."/data/";
	$files = readDirectory($path);
	$options ="";
	$filename = null;
	$disabled="";

	if (isset($_POST['advertisementFile']) && in_array($_POST['advertisementFile'], $files)) {
		$filename = $path.$_POST['advertisementFile'];
	}

	foreach ($files as $advertisement) {
		$selected = "";
		if (isset($_POST['advertisementFile']) && $_POST['advertisementFile'] == $advertisement) {
			$selected = "selected";
		}
		$options .= "<option value='{$advertisement}' {$selected}>{$advertisement}</option>";	
	}
?>

<h1>Visa annons</h1>
<p>Välj annons</p>
<div>
	<form method="POST" action="blokket.php?p=showSpecAdvertisement">
		<fieldset>
			<p>
				<label for="input1">Annonser</label>
				<br>
				<select id="input1" name="advertisementFile">
					<?php 
						echo $options;
					?>
				</select>
				<br>
				<input type="submit" name="advertisement" value="Völj annons">
			</p>
			<p>
				<div>
					<?php if ($filename) echo getFileContents($filename); ?>
				</div>
			</p>
		</fieldset>
	</form>
</div>