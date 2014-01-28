<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<?php if(isset($_SESSION['projectStylesheet'])): ?>
  		<link rel="stylesheet" href="css/<?php echo $_SESSION['projectStylesheet']; ?>">
	<?php else: ?>
  		<link rel="stylesheet" href="css/projectBase.css" title="General stylesheet">
	<?php endif; ?>
	<link rel="shortcut icon" href="images/favicon_glider.ico">
	<title><?php echo $title; ?></title>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<meta name="robots" content="noindex" />
	<meta name="robots" content="noarchive" />
	<meta name="robots" content="nofollow" />
</head>
<body>
	<header id="above">
		<nav id="related">
			Previous site: 
			<a href="http://www.student.bth.se/~pael10/htmlphp/Kmom06/me.php">Kmom06</a>  
		</nav>
	</header>
	<header id="top">
		<h2>Begravningsmuseum Online</h2>
		<nav class = "navMenu">
			<a id="project-" href="project.php">Hem</a>
			<a id="collectionObject-" href="collectionObject.php">Samling av Objekt</a>
			<a id="articles-" href="articles.php">Artiklar</a>
			<a id="about-" href="about.php">Om oss</a>
		</nav>	
	</header>
		