<?php 
	$path = dirname(__FILE__)."/data/";
	$options ="";
	$disabled="";
	$advIndex=null;
	$db = new PDO("sqlite:$dbPath");
	
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

<h1>Visa annons</h1>
<p>Välj annons</p>
<div>
	<form method="POST">
		<fieldset>
			<p>
				<label for="input1">Annonser</label>
				<br>
				<?php 
					echo $select;
				 ?>
				<br>
				<input type="submit" name="advertisement" value="Völj annons">
			</p>
			<p>
				<div>
					<?php if (isset($_POST['advertisementChoise'])): ?>
						<h2> <?php 	echo $advIndex['title']; ?></h2>
						<div>
							<img class="left" src= <?php echo $advIndex['img']; ?> alt="Annons bild" >
							<p><?php echo $advIndex['description']; ?></p>
						</div>
					<?php endif; ?>
				</div>
			</p>
		</fieldset>
	</form>
</div>