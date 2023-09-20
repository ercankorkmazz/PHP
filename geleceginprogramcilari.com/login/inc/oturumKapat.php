<?php
	unset($_SESSION["$_SERVER[SERVER_NAME]oturum"]);
	unset($_SESSION["$_SERVER[SERVER_NAME]kadi"]);
	unset($_SESSION["$_SERVER[SERVER_NAME]kID"]);
	
	$url="../img/slider/".$_COOKIE["etkinlikFoto"];
	unlink("$url");
	setcookie("etkinlikFoto","");
	
	session_destroy();
	header ("Location:index.php");
?>