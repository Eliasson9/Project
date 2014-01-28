<?php 
	include("included/config.php");
	$pageId="tester";

	$p = NULL;
	if (isset($_GET['p'])) {
		$p = $_GET['p'];
	}

	$path = "included/tester";
	$file = NULL;

	switch ($p) {
		case 'kmom03_get':
			$title="Test kmom03: Get";
			$file = "kmom03_get.php";
			break;
		
		case 'kmom03_getForm':
			$title="Test kmom03: Post";
			$file="kmom03_getForm.php";
			break;


		case 'kmom03_validate':
			$title="Test kmom03: Post";
			$file="kmom03_validate.php";
			break;


		case 'kmom03_server':
			$title="Test kmom03: Server";
			$file="kmom03_server.php";
			break;


		case 'kmom03_session':
			$title="Test kmom03: Session";
			$file="kmom03_session.php";
			break;


		case 'kmom03_destroySession':
			$title="Test kmom03: Destroy Session";
			$file="kmom03_destroySession.php";
			destroySession();	
			break;

		case 'kmom03_sessionChange':
			$title="Test kmom03: Change Session";
			$file="kmom03_sessionChange.php";	
			break;

		default:
			$title="Tester";
			$file="default.php";
			break;
	}
	include("included/header.php");
?>

<div id="wrap">
	<div id="leftCol">
		<?php 
			include("included/aside.php") 
		?>
	</div>
	<div id="rightCol">
		<p><a href="viewSource.php?path=<?php echo $path; ?>/<?php echo $file; ?>">Källkoden: <code><?php echo "$path/$file" ?></code></a></p>
		<?php
			include("$path/$file");
		?>
	</div>
</div>

<?php 
	include("included/byline.php");
	include("included/footer.php");
?>