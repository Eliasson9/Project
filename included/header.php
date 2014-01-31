<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf-8">
	<?php if(isset($_SESSION['stylesheet'])): ?>
  		<link rel="stylesheet" href="css/<?php echo $_SESSION['stylesheet']; ?>">
	<?php else: ?>
  		<link rel="stylesheet" href="css/stylesheet.css" title="General stylesheet">
  		<link rel="alternate stylesheet" href="css/debug.css" title="Debug stylesheet">
	<?php endif; ?>
	<link rel="shortcut icon" href="images/favicon_glider.ico">
	<title><?php echo $title; ?></title>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<meta name="robots" content="noindex" />
	<meta name="robots" content="noarchive" />
	<meta name="robots" content="nofollow" />
</head>
<body <?php if(isset($pageId)) echo "id='$pageId' "; ?>>
	<header id="above">

		<?php echo userLoginMenu(); ?>
		<nav id="related">
			<a href="http://www.student.bth.se/~pael10/htmlphp/Kmom01/me.php">Kmom01</a>
			<a href="http://www.student.bth.se/~pael10/htmlphp/Kmom02/me.php">Kmom02</a> 
			<a href="http://www.student.bth.se/~pael10/htmlphp/Kmom03/me.php">Kmom03</a>
            <a href="http://www.student.bth.se/~pael10/htmlphp/Kmom04/me.php">Kmom04</a>  
			<a href="http://www.student.bth.se/~pael10/htmlphp/Kmom05/me.php">Kmom05</a>
			<a href="http://www.student.bth.se/~pael10/htmlphp/Kmom06/me.php">Kmom06</a>  
			Kmom07/10
		</nav>
	</header>
	<header id="top">
		<a href="me.php"><img src="images/logo.png" alt = "logo bild" width = "200" height = "70"></a>
		<nav class = "navMenu">
			<a id="me-" href="me.php">Me</a>
			<a id="report-" href="report.php">Report</a>
			<a id="tester-" href="test.php">Tester</a>
			<a id="source-" href="viewSource.php">Källkod</a>
			<a id="style-" href="Style.php">Style</a>
			<a id="blokket-" href="blokket.php">Blokket</a>
			<a id="blokket2-" href="blokket2.php">Blokket2</a>
			<a id="Project" href="project.php">Project</a>
		</nav>	
	</header>
	