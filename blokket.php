<?php 
	include("included/config.php");
	$title = "Blokket";
	$pageId="blokket";
	$path="included/blokket";
	$file=null;
	$p = null;
	

	if (isset($_GET['p'])) {
		$p = $_GET['p'];
	}

	switch ($p) {
		case 'init':
			$title="Initiera";
			$file="init.php";
			break;
			
		case 'updateAdvertisement':
			$title="Updatera annons";
			$file="updateAdvertisement.php";
			break;
		
		case 'addAdvertisement':
			$title="Lägg till annons";
			$file="addAdvertisement.php";
			break;

		case 'removeAdvertisement':
			$title="Ta bort annons";
			$file="removeAdvertisement.php";
			break;

		case 'showSpecAdvertisement':
			$title="Visa annons";
			$file="showSpecAdvertisement.php";
			break;

		case 'showAllAdvertisement':
			$title="Visa alla annonser";
			$file="showAllAdvertisement.php";
			break;


		default:
			$title="Blokket";
			$file="default.php";
			break;
	}

	include("included/header.php");
?>

<div id="wrap">
	<div id="leftCol">
		<?php include("$path/aside.php"); ?>
	</div>
	<div id="rightCol">
		<p><a href="viewSource.php?path=<?php echo $path; ?>/<?php echo $file; ?>">Källkoden: <code><?php echo "$path/$file" ?></code></a></p>
		<?php include("$path/$file"); ?>
	</div>
</div>
<?php 
	include("included/byline.php");
	include("included/footer.php"); 
?>