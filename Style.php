<?php 
	include("included/config.php");
	$title = "Style väljare";
	$pageId="style";
	$path="included/style";
	$file=null;
	$p = null;
	

	if (isset($_GET['p'])) {
		$p = $_GET['p'];
	}

	switch ($p) {
		case 'chooseStyle':
			$title="Välj Stylesheet";
			$file="chooseStyle.php";
			if (isset($_POST['stylesheet'])) {
				$_SESSION['stylesheet'] = $_POST['stylesheetChoise'];
			}
			break;
			
		case 'editStyle':
			$title="Edidera Stylesheet";
			$file="edit_stylesheet.php";
			break;
		
		default:
			$title="Välj style";
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
		<?php include("$path/$file"); ?>
	</div>
</div>
<?php 
	include("included/byline.php");
	include("included/footer.php"); 
?>