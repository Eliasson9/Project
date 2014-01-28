<?php 
	$path = dirname(__FILE__)."/data/";
	$files = readDirectory($path);
	$options ="";
	$filename = null;
	$disabled="";

	if (isset($_POST['advertisementFile']) && in_array($_POST['advertisementFile'], $files)) {
		$filename = $path.$_POST['advertisementFile'];
	}
	if (isset($_POST['save'])) {
		$res = putFileContents($filename, strip_tags($_POST['fileContent'], "<b><i><p><img>"));
	}
	if (is_writable($filename)) {
		$fileInfo = "Filen är skrivbar";
	}
	else{
		$fileInfo = "Filen är ej skrivbar";
		$disabled = "disabled";
	}
	foreach ($files as $advertisement) {
		$selected = "";
		if (isset($_POST['advertisementFile']) && $_POST['advertisementFile'] == $advertisement) {
			$selected = "selected";
		}
		$options .= "<option value='{$advertisement}' {$selected}>{$advertisement}</option>";	
	}
?>

<h1>Editera annons</h1>
<p>Välj annons</p>
<div>
	<form method="POST" action="blokket.php?p=updateAdvertisement">
		<fieldset>
			<p>
				<label for="input1">Annons</label>
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
				<textarea width=100% name="fileContent">
					<?php if ($filename) echo getFileContents($filename); ?>
				</textarea>
			</p>
			<br>
			<input type="submit" name="save" value="Spara" <?php echo $disabled ?>>
			<input type="submit" name="forget" value="Ångra">
			<?php if (isset($fileInfo)):?>
			<p>	
				<output class="notice"><?php echo $fileInfo; ?></output>
			</p>
		<?php endif; ?>
		</fieldset>
	</form>
	<?php if (isset($res)): ?>
		<p>
			<output class="success"><?php echo $res; ?></output>
		</p>
	<?php endif; ?>
</div>