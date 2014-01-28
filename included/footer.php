	<hr>
	<footer id = "bottom">
		<p>
			Manualer: 
			<a href="http://www.w3.org/2009/cheatsheet/">Cheatsheet</a>
			<a href="http://dev.w3.org/html5/spec/">HTML5</a>
			<a href="http://www.w3.org/TR/CSS2/">CSS2</a>
			<a href="http://www.w3.org/Style/CSS/current-work#CSS3">CSS3</a>
			<a href="http://php.net/manual/en/index.php">PHP</a>
		</p>
		<p>
			Verktyg: 
			<a href="http://validator.w3.org/check/referer">HTML 5</a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">CSS3</a>
			<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">unicorn</a>
			<a href="http://validator.w3.org/checklink?uri=http://dbwebb.se/htmlphp/me/kmom03/test.php?p=kmom03-server">Links</a>
			<a href="http://validator.w3.org/i18n-checker/check?uri=http://dbwebb.se/htmlphp/me/kmom03/test.php?p=kmom03-server">i18n</a>
			<a href="source.php">Källkod</a>
		</p>
		<?php if(isset($pageTimeGeneration)) : ?>
		<p>Page generated in <?php echo round(microtime(true)-$pageTimeGeneration, 5); ?> seconds</p>
		<?php endif; ?>
	</footer>	
</body>
</html>