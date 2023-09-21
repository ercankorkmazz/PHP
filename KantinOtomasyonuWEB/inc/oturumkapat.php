<?php
	unset($_SESSION["$_SERVER[SERVER_NAME]"]);
	unset($_SESSION["$_SERVER[SERVER_NAME]kadi"]);
	unset($_SESSION["$_SERVER[SERVER_NAME]kID"]);
	setcookie("bilgi","");
	
	session_destroy() ;
	header ("Location:index.php"); 
?>