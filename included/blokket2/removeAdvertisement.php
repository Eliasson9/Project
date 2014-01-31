<?php 
	$path = dirname(__FILE__)."/data/";
	$select ="";
  $choise="";
  $db = new PDO("sqlite:$dbPath");

	if(isset($_POST['doDelete'])) {
  		if(isset($_POST['advertisementChoise']))
  		{
          $choise [] = $_POST['advertisementChoise'];
        	$stmt = $db->prepare("DELETE FROM Advertisement WHERE id=?");
          $stmt->execute($choise);
        	$output = "Filen raderades.";
  		}
  		else
  		{
        	$output = "Annonsen finns ej och kunde inte raderas.";
  		}
	}

  $stmt = $db->prepare("SELECT * FROM Advertisement;");
  $stmt->execute();
  $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$select = "<select id='input1' name='advertisementChoise'>";
  foreach ($res as $adv) {
    $select .= "<option value='{$adv['id']}'>{$adv['title']}</option>";
  }
  $select .= "</select>";
 ?>

 <h1>Ta bort annons</h1>

 <form method="post">
 	<fieldset>
 		<p>
 			<label for="input1">Välj annons att ta bort</label>
 			<br>
      <?php 
        echo $select;
       ?>
 		</p>
 		<p>
 			<input type="submit" name="doDelete" value="Ta bort">
 		</p>

    <?php if(isset($output)): ?>
      <p><output class="info"><?php echo $output ?></output></p>
    <?php endif; ?>
 	</fieldset>
 </form>

