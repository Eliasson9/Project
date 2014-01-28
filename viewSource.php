<?php
include("src/source.php");


/**
 * Do it.
 *
 */
$source = new CSource();
?>
<?php
	include("included/config.php");
	$title = "Min källkod";
	$pageId = "source";
	include("included/header.php")
?>
<div id="wrap">
	<h1>View sourcecode</h1>
	<p>
	The following files exists in this folder. Click to view.
	</p>
	<?=$source->View()?>
</div>
<?php 
	include("included/byline.php");
	include("included/footer.php"); 
?>