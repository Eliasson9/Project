<?php 
	include 'included/config.php';
	$title = "Samling av Objekt";
	$pageId = "Objekt";
	$path = dirname(__FILE__);
	$dbPath = dirname(__FILE__)."/included/Project/data/bmo.sqlite";
	$html = "";
		
	$db = new PDO("sqlite:$dbPath");
	$stmt = $db->prepare('SELECT DISTINCT category FROM Object;');
  	$stmt->execute();
  	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$categories = "<nav id='aside'>";
	$categories .= "<a href=collectionObject.php>Visa alla</a></br>";
	foreach ($res as $cat) {
		$categories .= "<a href=collectionObject.php?p={$cat['category']}>{$cat['category']}</a></br>";
	}
	$categories .= "</aside>";
	if(isset($_GET['p'])){
		$html = "<h3>{$_GET['p']}</h3>";	
		$category [] = $_GET['p'];	
		$stmt = $db->prepare('SELECT * FROM Object WHERE category = ?;');
		$stmt->execute($category);
	}
	else{
		$html = "<h3>Alla kategorier</h3>";
		$stmt = $db->prepare('SELECT * FROM Object;');
		$stmt->execute();
	}	
	
  	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	foreach ($res as $object) {
		$html .= "<p>{$object['title']}</p>";
		$html .= "<figure>
			<img class='obj-img' src='{$object['image']}' alt='{$object['title']}'>
			<figcaption>{$object['text']}</figcaption>
		</figure>";
		
 	}
	include("included/headerProject.php");
	 ?>
	<div id="left">
		<?php include $path.'/included/Project/collectionObject/aside.php'; ?>
	</div>
	<div id="right">
		<?php echo $html; ?>
	</div>

<?php include("included/footerProject.php") ?>