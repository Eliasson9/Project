<?php 
	$path = dirname(__FILE__)."/data/";
	$advIndex = null;
	$disabled="";
	$db = new PDO("sqlite:$dbPath");

	if (isset($_POST['save'])) {
		$content [] = strip_tags($_POST['title'], "<b><i><p><img>");
		$content [] = strip_tags($_POST['description'], "<b><i><p><img>");
		$content [] = strip_tags($_POST['img'], "<b><i><p><img>");
		$content [] = strip_tags($_POST['advertisementChoise'], "<b><i><p><img>");

		$stmt = $db->prepare("UPDATE Advertisement SET title=?, description=?, img=? WHERE id=?");
		$stmt->execute($content);
		$output = "Anninsen är uppdaterad";
	}

	$stmt = $db->prepare("SELECT * FROM Advertisement;");
	$stmt->execute();
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$select = "<select id='input1' name='advertisementChoise'>";
  	foreach($res as $adv) {
  		$selected = "";
		if (isset($_POST['advertisementChoise']) && $_POST['advertisementChoise'] == $adv['id']) {
			$selected = "selected";
		}
    	$select .= "<option value='{$adv['id']}' {$selected}>{$adv['title']}</option>";
  	}
  	$select .= "</select>";
	
	foreach ($res as $row) {
		if (isset($_POST['advertisementChoise']) && ($_POST['advertisementChoise'] == $row['id'])) {
			$advIndex = $row;
		}
	}

	
	
?>

<h1>Editera annons</h1>
<p>Välj annons</p>
<div>
	<form method="POST">
		<fieldset>
			<p>
				<label for="input1">Annons</label>
				<br>
				<?php 
					echo $select;
				 ?>
				<br>
				<input type="submit" name="advertisement" value="Völj annons">
			</p>
			<p>
		      <label for="input1">Titel:</label><br>
		      <input type="text" class="text" name="title" value="<?php echo $advIndex['title']; ?>">
		    </p>    
		    
		    <p>
		      <label for="input1">Bildlänk (relativ på servern eller direkt med http://server.com/bild.png):</label><br>
		      <input type="link" class="text" name="img" value="<?php echo $advIndex['img']; ?>">
		    </p> 
			<p>
				<textarea width=100% name="description">
					<?php if ($advIndex) echo $advIndex['description']; ?>
				</textarea>
			</p>
			<br>
			<input type="submit" name="save" value="Spara" <?php echo $disabled ?>>
			<input type="submit" name="forget" value="Ångra">
		</fieldset>
	</form>
	<?php if(isset($output)): ?>
    	<p><output class="success"><?php echo $output; ?></output></p>
    <?php endif; ?>
</div>