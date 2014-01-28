<?php 
	$path = dirname(__FILE__)."/data/";
  	$files = readDirectory($path);
  	$filename=null;
	$options ="";

	if(isset($_POST['doDelete'])) {
  		if(isset($_POST['file']) && in_array($_POST['file'], $files))
  		{
        	$filename = $path . $_POST['file'];
        	unlink($filename);
        	$files = readDirectory($path);
        	$res = "Filen raderades.";
  		}
  		else
  		{
        	$res = "Filen finns ej och kunde inte raderas.";
  		}
	}

	foreach ($files as $advertisement) {
    	$options .= "<option value='{$advertisement}'>{$advertisement}</options>";
  	}
 ?>

 <h1>Ta bort annons</h1>

 <form method="post">
 	<fieldset>
 		<p>
 			<label for="input1">Välj annons att ta bort</label>
 			<br>
 			<select id="input1" name="file">
 				<?php 
 					echo $options;
 				 ?>
 			</select>
 		</p>
 		<p>
 			<input type="submit" name="doDelete" value="Ta bort">
 		</p>
 	</fieldset>
 </form>


<?php if(isset($res)): ?>
	<p>
       	<output class="success"><?php echo $res; ?></output>
    </p>
<?php endif; ?>