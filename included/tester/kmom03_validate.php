<form method="post" action="?p=included/tester/kmom03_validate.php">
	<fieldset>
		<legend>
			Exempel på formulär med get-metoden
		</legend>
		<p>
			<label for="input1">Användarkonto: </label>
			<br>
			<input id="input1" class="text" type="text" name="account">
		</p>
		<p>
			<label for="input2">Password: </label>
			<br>
			<input id="input2" class="text" type="password" name="password">
		</p>
		<p>
			<input type="submit" name="doLogin" value="Login">
		</p>
	</fieldset>
</form>
<h1>Visa innehållet i <code>$_GET</code></h1>
<p>Du anropade sidan med följande querystring:
<code><?php echo htmlentities($_SERVER['QUERY_STRING']); ?></code></p>
<p><code>$_GET</code> innehåller följande:</p>
<pre><?php print_r($_GET); ?></pre>

<h1>Visa innehållet i <code>$_POST</code></h1>
<p>Du anropade sidan med följande querystring:
<code><?php echo htmlentities($_SERVER['QUERY_STRING']); ?></code></p>
<p><code>$_POST</code> innehåller följande:</p>
<pre><?php print_r($_POST); ?></pre>	
<?php
	if(isset($_POST['account'])) {
   	    echo "<p>Kontot är definerat.</p>"; 
		
		if(is_numeric($_POST['account'])) {
    	    echo "<p>Kontot är numeric.</p>"; 
    	} 
    	else {
    	    echo "<p>Kontot är EJ numeric.</p>";
		}

		echo "<p>Med strip tags ser kontot ut: '";
		echo strip_tags($_POST['account']);
		echo "'</p>";
   	} 
   	else if(empty($_POST['account'])) {
   	    echo "<p>Kontot är EJ definerat.</p>";
	}
?>