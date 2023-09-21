<?php
	@include('inc/baglan.php');
	$sql="update kullanici set oturum = '' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
	if (@mysql_query($sql,$baglan))
		unset($_SESSION["$_SERVER[SERVER_NAME]"]);
		
	unset($_SESSION["$_SERVER[SERVER_NAME]kadi"]);
	unset($_SESSION["$_SERVER[SERVER_NAME]kID"]);
	setcookie("bildirim","");
	setcookie("bilgi","");
	
	session_destroy() ;
	header ("Location:../index.php"); 
?>