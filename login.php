<?php 
	include("included/config.php");
	if (isset($_GET['p'])) {
		$id = $_GET['p'];
	}
	$pageId = "login";
	$p = null;
	if(isset($_GET["p"])) 
	{
	  $p = $_GET["p"];
	}

	// Is the action a known action?
	$content = null;
	$output = null;
	if($p == "login") 
	{
	  $title = "Logga in";
	  $content = userLogin();
	}
	else if ($p == "logout") 
	{
	  $title = "Logga ut";
	  $content = userLogout();
	} 
	else
	{
	  $title = "Status login / logout";
	}

	include("included/header.php");
 ?>
 <div id="wrap">
  <div class="left border" style="width:80%;">
    <?php 
    	if(isset($content)):
      		echo $content;
    	else: 
    ?> 
    
    <h1>Status login / logout</h1>
    <p>Denna webbplats har skyddade delar. Du måste logga in för att komma åt dem.</p>
    <p>För tillfället är du: 
    <?php 
    	if(userIsAuthenticated()): 
    ?>
    
    <strong>inloggad</strong>.</p>
    <p><a href="?p=logout">Vill du logga ut</a>?</p>
    <?php 
    	else: 
    ?>
    
    <strong>ej inloggad</strong>.</p>
    <p><a href="?p=login">Vill du logga in</a>?</p>
    <?php 
    	endif;
    	endif; 
    ?>  
    <hr>
  </div>
 </div>
 <?php 
 	include("included/footer.php")
 ?>