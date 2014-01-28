<?php 
	$file = "chooseStyle.php";
	$options ="";
	$styles = readDirectory("css/");
	foreach ($styles as $stylesheet) {
		$selected = "";
		if (isset($_SESSION['stylesheet']) && $_SESSION['stylesheet'] == $stylesheet) {
			$selected = "selected";
		}
		$options .= "<option value='{$stylesheet}' {$selected}>{$stylesheet}</option>";
	}
?>

<p>
	<a href="viewSource.php?path=<?php echo $path.'/'.$file?>">Källkoden: <code><?php echo$file ?></code></a>
</p>
	<h1>Välj Stylesheet</h1>
	<p>Du kan välja mellan de alternativ som finns i listan nedan</p>
	<div>
		<form method="post" action"Style.php?p=chooseStyle">
           	<p>
				<label for="input1">Stylesheet</label>
				<br>
               	<select id='input1' name='stylesheetChoise'>";
               		<option value="stylesheet.css">DefaultStyle</option>
					<?php
						echo $options;					
		 			?>
		 		</select>
		 		<br>
		 		<input type="submit" name="stylesheet" value="Välj style">
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
	</div>
	<p>
		
	</p>