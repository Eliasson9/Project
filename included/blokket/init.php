<?php 
	$path = dirname(__FILE__)."/data/";
	$files = readDirectory($path);
?>

<p>Alla filer sparas i katalogen: <code><?php echo $path ?></code> </p>

<?php if (is_writable($path)): ?>
	<p class="success"> Katalogen är skrivbar</p>
<?php else: ?>
	<p class="alert">OBS! Katalogen är ej skribar</p>
<?php endif; ?>
<ul>


<p>Katalogen innehåller följande filer:</p>

<?php foreach ($files as $value): ?>
	<li><?php echo $value; ?></li>
<?php endforeach; ?>
</ul>
