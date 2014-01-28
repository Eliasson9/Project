<h1>Visa innehållet i <code>$_SESSION</code></h1>
<p>
	Länken till denna sidan är följande
	<br>

	<?php 
		echo "<a href=".getCurrentUrl().">".getCurrentUrl()."</a>";
	?>
</p>
<p><?php echo '<pre>'.print_r($_SESSION, TRUE).'</pre>'; ?></p>