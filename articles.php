<?php 
	include 'included/config.php';
	$title = "Artiklar";
	$pageId = "Artiklar";
	$path = dirname(__FILE__);
	$dbPath = dirname(__FILE__)."/included/Project/data/bmo.sqlite";
	
	$db = new PDO("sqlite:$dbPath");
	$stmt = $db->prepare('SELECT title FROM Article WHERE category = "article";');
  	$stmt->execute();
  	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$categories = "<nav id='aside'>";
	$categories .= "<a href=articles.php>Visa alla</a><br />";
	
	foreach ($res as $cat) {
		if($cat['title']=="Begravningsseder och bruk") {
			$categories .= "<a href='articles.php?p=Begravningsseder'>{$cat['title']}</a><br />";	
		}
		else if($cat['title']=="Begravningsfest och Gravöl - ett stort kalas") {
			$categories .= "<a href='articles.php?p=Begravningsfest'>{$cat['title']}</a><br />";
		}
		else {
			$categories .= "<a href='articles.php?p={$cat['title']}'>{$cat['title']}</a><br />";	
		}
	}
	$categories .= "</nav>";
	if(isset($_GET['p'])){
		if ($_GET['p'] == 'Begravningsseder') {
			$category [] = 'Begravningsseder och bruk';
		} 
		else if($_GET['p'] == 'Begravningsfest'){
			$category [] = 'Begravningsfest och Gravöl - ett stort kalas';
		}
		else {
			$category [] = $_GET['p'];	
		}
		
		$stmt = $db->prepare('SELECT * FROM Article WHERE title = ? AND category = "article";');
		$stmt->execute($category);
	}
	else{
		$stmt = $db->prepare('SELECT * FROM Article WHERE category = "article";');
		$stmt->execute();
	}		
  	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$html = "";
	foreach ($res as $article) {
		$html .= $article['title'];
		$html .= $article['content'];
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