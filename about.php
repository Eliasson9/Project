<?php 
	include 'included/config.php';
	$title = "Om BMO";
	$pageId = "Om BMO";
	$path = dirname(__FILE__);
	$dbPath = dirname(__FILE__)."/included/Project/data/bmo.sqlite";
	
	$db = new PDO("sqlite:$dbPath");
	$stmt = $db->prepare('SELECT * FROM Article WHERE category = "about";');
  	$stmt->execute();
  	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	include("included/headerProject.php");
	 ?>
	<div id="left">
		<article>
			<p>Mitt namn är Patrik Eliasson och är 22 år gammal. Jag studerar Civilingengör data- elektroteknik med specialiceringen Tekniksk datavetenskap. Har nu precis påbörjat mitt 4:e år.</p>
			<p>Den ända kursen som jag läst som bestod utav ren programmering var C++ och har sedan därefter haft lite C, Java och assembler i mina andra kurser. I våras hade jag en projektkurs som jag då för första gången använde mig utav webbprogrammering samt databas. Det var då jag fick intresset att lära mig mer och få en lite bättre förståelse än det ytliga jag lärde mig genom självstudier. <br>
			Under sommaren så tog jag och testade på Google App Engine och skapade en hemsida som är tänkt vara en e-handels sida till min pappas nystartade företag <a href="http://www.bigbait.se">(Bigbait)</a>. Detta är även en anleding till att jag har valt att läsa dessa kurser. </p>
			<p>För övrigt så läser jag nu Agentsystem och Forsknins Methodik under denna läsperiod</p>
		</article>
	</div>
	<div id="right">
		<?php echo $res[0]['content']; ?>
	</div>
	


<?php include("included/footerProject.php") ?>