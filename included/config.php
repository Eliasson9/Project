<?php
	session_name(preg_replace('/[:\.\/-_]/', '', __FILE__));
	session_start();
	include_once(dirname(__FILE__) . "/../src/common.php"); 
	include_once(dirname(__FILE__) . "/../src/login.php");

	// account and password that can login
	$userAccount = "doe";
	$userPassword = userPassword("doe");
	$pageTimeGeneration = microtime(true);
	error_reporting(-1);
	