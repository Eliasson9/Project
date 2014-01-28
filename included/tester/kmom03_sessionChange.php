<?php
	$_SESSION['me'] = "dbwebb.se";
	if(isset($_SESSION['counter'])) {
	  $_SESSION['counter'] = $_SESSION['counter'] + 1;
	}
	else
	{
	  $_SESSION['counter'] = 1;
	}
?>
<h1>Ändra värden i session</h1>
<p>När denna fil körs så ändras värden i session</p>