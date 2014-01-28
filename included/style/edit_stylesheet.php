<?php 
	$file = "edit_stylesheet.php";
	$options ="";
	$styles = readDirectory("css/");
	$filename = null;
	$disabled = ""; 
	
	if(isset($_POST['stylesheetFile']) && in_array($_POST['stylesheetFile'], $styles))
	{
 		$filename = "css/".$_POST['stylesheetFile'];
	}
	if(isset($_POST['save'])) {
  		$res = putFileContents($filename, strip_tags($_POST['fileContent']));
	}
	if (is_writable($filename)) {
    	$fileInfo = 'The file is writable';
	} else {
   		$fileInfo = 'The file is not writable';
		$disabled = "disabled";
	}
	foreach ($styles as $stylesheet) {
		$selected = "";
		if (isset($_POST['stylesheetFile']) && $_POST['stylesheetFile'] == $stylesheet) {
			$selected = "selected";
		}
		$options .= "<option value='{$stylesheet}' {$selected}>{$stylesheet}</option>";
	}	
	
?>

<p>
	<a href="viewSource.php?path=<?php echo $path.'/'.$file?>">Källkoden: <code><?php echo$file ?></code></a>
</p>
	<h1>Editera Stylesheet</h1>
	<p>Välj de stylesheet du vill ändra</p>
	<div>
		<form method="post" action"Style.php?p=editStyle">
        <fieldset>
           	<p>
				<label for="input1">Stylesheet</label>
				<br>
               	<select id='input1' name='stylesheetFile'>";
               		<option value="stylesheet.css">DefaultStyle</option>
					<?php
						echo $options;					
		 			?>
		 		</select>
		 		<br>
		 		<input type="submit" name="stylesheet" value="Välj Fil">
           	</p>
            <p>
            <textarea width=100% name="fileContent">
            	<?php if($filename) echo getFileContents($filename); ?>
            </textarea>
           	<br>
            <input type="submit" name="save" value="Spara" <?php echo $disabled ?>>	
            <input type="submit" name="forget" value="Ångra">	
            <?php if(isset($fileInfo)): ?>
			<p>
            	<output class="notice"><?php echo $fileInfo; ?></output>
           	</p>
			<?php endif; ?>	
            </fieldset>
            </p>	
		</form>
		<p>
			<?php 
				if (isset($_SESSION['stylesheet'])) {
					echo "Din aktuella stylesheet är {$_SESSION['stylesheet']}";
				}
				else{
					echo "Du använder standard stylesheet";
				}
			?>
		</p>
        <?php if(isset($res)): ?>
			<p>
            	<output class="success"><?php echo $res; ?></output>
           	</p>
		<?php endif; ?>
        
	</div>
	<p>
		
	</p>